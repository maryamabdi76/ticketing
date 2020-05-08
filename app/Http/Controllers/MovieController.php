<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Posts;
use App\Models\Genres;
use App\Models\Locations;
use App\Models\Shows;
use App\Models\Reviews;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Verta;

class MovieController extends Controller
{
    public function index()
    {
        $arrayIdMovies=array();
        $movies = Events::where('categories_id', 1)->orderBy('id', 'desc');
        foreach ($movies->get() as $v)
            $arrayIdMovies[] = $v->id;
        $movies = $movies->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 1)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'movies' => $movies,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdMovies' => $arrayIdMovies
        );
        return view('movie.movie')->with($data);
    }
    public function details($id)
    {
        $date = array();
        $flag = $averate = $rate = 0;

        $movie = Events::findOrFail($id);
        $related = Posts::where('events_id', $id)->get();
        $relatedEvents = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
            ->join('genres', 'genres.id', '=', 'events_genre.genres_id')
            ->where('genres.id', $movie->genres[0]->id)
            ->where('categories_id', 1)
            ->select('events.id', 'events.name')->orderBy('id', 'desc')->take(6)->get();
        $reviews = Reviews::where('events_id', $id)->where('status', 1)->orderBy('created_at')->get();
        $shows = Shows::where('events_id', $id)->get();

        foreach($reviews as $r){
            $r->created_at = new Verta($r->created_at);
        }
        
        $count = count($reviews);

        if ($count !== 0) {
            foreach ($reviews as $r) {
                $rate += $r->rating;
            }
            $rate = $rate / $count;
            $averate = round($rate, 1);
            $averate = $averate * 20;
        }

        foreach ($shows as $v) {
            $shamsi = Verta::parse($v->date);
            $t = $shamsi->formatWord('l');
            $date[$v->date] = $t.' '.$v->date;
        }
        $date = array_unique($date);
        if ($date) {
            $flag = 1;
        }

        $data = array(
            'event_id' => $id,
            'movie' => $movie,
            'related' => $related,
            'relatedEvents' => $relatedEvents,
            'reviews' => $reviews,
            'averate' => $averate,
            'count' => $count,
            'date' => $date,
            'flag' => $flag,
            'id' => $id
        );

        return view('movie.movie-details')->with($data);
    }

    public function searchgenre(Request $request)
    {
        $arrayIdMovies=array();
        $checkbox = $request['genre'];
        $query = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
            ->join('genres', 'genres.id', '=', 'events_genre.genres_id')->Where(function ($query) use ($checkbox) {
                for ($i = 0; $i < count($checkbox); $i++) {
                    if ($checkbox[$i] == '*')
                        $query->select('* from events');
                    else
                        $query->orwhere('genres.name', $checkbox[$i]);
                }
            })
            ->where('categories_id', 1)->select('events.id', 'events.name', 'events.date')->orderBy('id', 'desc');
        foreach ($query->get() as $v)
            $arrayIdMovies[] = $v->id;
        $movies = $query->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 1)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'movies' => $movies,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdMovies' => $arrayIdMovies
        );
        return view('movie.movie')->with($data);
    }

    public function searchmovie(Request $request)
    {
        $arrayIdMovies=array();
        $city = $request->city;
        $date = $request->date;
        $cinema = $request->cinema;
        $search = $request->search;
        if ((isset($city) || isset($date) || isset($cinema)) && isset($search))
            $query = Events::where('categories_id', 1)
                ->join('shows', 'shows.events_id', '=', 'events.id')
                ->join('salons', 'salons.id', '=', 'shows.salons_id')
                ->join('locations', 'locations.id', '=', 'salons.locations_id')
                ->where('locations.name', 'like', "%{$cinema}%")
                ->where('locations.city', 'like', "%{$city}%")
                ->where('shows.date', 'like', "%{$date}%")
                ->select('events.id', 'events.name', 'events.date')
                ->where('events.name', 'like', "%{$search}%")->orderBy('events.id', 'desc');
        elseif (isset($search))
            $query = Events::where('categories_id', 1)
                ->where('events.name', 'like', "%{$search}%")->orderBy('id', 'desc');
        else
            $query = Events::where('categories_id', 1)->orderBy('id', 'desc');
        foreach ($query->get() as $v)
            $arrayIdMovies[] = $v->id;
        $movies = $query->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 1)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'movies' => $movies,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdMovies' => $arrayIdMovies
        );
        return view('movie.movie')->with($data);
    }

    public function genres($id)
    {
        $arrayIdMovies=array();
        $movies = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
            ->join('genres', 'genres.id', '=', 'events_genre.genres_id')
            ->where('genres.id', $id)->where('categories_id', 1)->select('events.id', 'events.name', 'events.date')
            ->orderBy('id', 'desc');
        foreach ($movies->get() as $v)
            $arrayIdMovies[] = $v->id;
        $movies = $movies->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 1)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'movies' => $movies,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdMovies' => $arrayIdMovies
        );
        return view('movie.movie')->with($data);
    }

    public function sortShowingMovie(Request $request)
    {
        $x = $movies = $z = array();
        $movie = $request->show;
        foreach ($movie as $k => $v) {
            $showing[] = Shows::where('events_id', $v)->get();
        }
        foreach ($showing as $k => $v) {
            if ($v->count() > 0)
                $x[] = Events::where('id', $v[0]->events_id)->get();
        }
        if ($x) {
            foreach ($x as $k => $v) {
                $z[] = $v[0];
            }
            $movies = Collection::make($z);
            $movies = new LengthAwarePaginator($movies, $movies->count(),100);
        }
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 1)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'movies' => $movies,
            'genres' => $genres,
            'sort' => 1,
            'arrayIdMovies' => $movie
        );
        return view('movie.movie')->with($data);
    }
}
