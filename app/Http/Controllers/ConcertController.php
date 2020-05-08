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

class ConcertController extends Controller
{

    public function index()
    {
        $arrayIdConcerts=array();
        $concerts = Events::where('categories_id', 2)->orderBy('id', 'desc');
        foreach ($concerts->get() as $v)
            $arrayIdConcerts[] = $v->id;
        $concerts = $concerts->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 2)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'concerts' => $concerts,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdConcerts' => $arrayIdConcerts
        );
        return view('concert.concert')->with($data);
    }
    public function details($id)
    {

        $date = array();
        $flag = $averate = $rate = 0;

        $concert = Events::findOrFail($id);
        $related = Posts::where('events_id', $id)->get();
        $relatedEvents = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
            ->join('genres', 'genres.id', '=', 'events_genre.genres_id')
            ->where('genres.id', $concert->genres[0]->id)
            ->where('categories_id', 2)
            ->select('events.id', 'events.name')->orderBy('id', 'desc')->take(6)->get();
        $reviews = Reviews::where('events_id', $id)->where('status', 1)->orderBy('created_at')->get();
        $count = count($reviews);

        foreach($reviews as $r){
            $r->created_at = new Verta($r->created_at);
        }
        
        if ($count !== 0) {
            foreach ($reviews as $r) {
                $rate += $r->rating;
            }
            $rate = $rate / $count;
            $averate = round($rate, 1);
            $averate = $averate * 20;
        }

        $shows = Shows::where('events_id', '=', $id)->get();

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
            'concert' => $concert,
            'related' => $related,
            'relatedEvents' => $relatedEvents,
            'reviews' => $reviews,
            'averate' => $averate,
            'count' => $count,
            'date' => $date,
            'flag' => $flag,
            'id' => $id
        );

        return view('concert.concert-details')->with($data);
    }

    public function searchgenre(Request $request)
    {
        $arrayIdConcerts=array();
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
            ->where('categories_id', 2)->select('events.id', 'events.name', 'events.date')->orderBy('id', 'desc');
        foreach ($query->get() as $v)
            $arrayIdConcerts[] = $v->id;
        $concerts = $query->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 2)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'concerts' => $concerts,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdConcerts' => $arrayIdConcerts
        );
        return view('concert.concert')->with($data);
    }

    public function searchconcert(Request $request)
    {
        $arrayIdConcerts=array();
        $city = $request->city;
        $date = $request->date;
        $cinema = $request->cinema;
        $search = $request->search;
        if ((isset($city) || isset($date) || isset($cinema)) && isset($search))
            $query = Events::where('categories_id', 2)
                ->join('shows', 'shows.events_id', '=', 'events.id')
                ->join('salons', 'salons.id', '=', 'shows.salons_id')
                ->join('locations', 'locations.id', '=', 'salons.locations_id')
                ->where('locations.name', 'like', "%{$cinema}%")
                ->where('locations.city', 'like', "%{$city}%")
                ->where('shows.date', 'like', "%{$date}%")
                ->select('events.id', 'events.name', 'events.date')
                ->where('events.name', 'like', "%{$search}%")->orderBy('events.id', 'desc');
        elseif (isset($search))
            $query = Events::where('categories_id', 2)
                ->where('events.name', 'like', "%{$search}%")->orderBy('id', 'desc');
        else
            $query = Events::where('categories_id', 2)->orderBy('id', 'desc');
        foreach ($query->get() as $v)
            $arrayIdConcerts[] = $v->id;
        $concerts = $query->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 2)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'concerts' => $concerts,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdConcerts' => $arrayIdConcerts
        );
        return view('concert.concert')->with($data);
    }

    public function genres($id)
    {
        $arrayIdConcerts=array();
        $concerts = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
            ->join('genres', 'genres.id', '=', 'events_genre.genres_id')
            ->where('genres.id', $id)->where('categories_id', 2)->select('events.id', 'events.name', 'events.date')
            ->orderBy('id', 'desc');
        foreach ($concerts->get() as $v)
            $arrayIdConcerts[] = $v->id;
        $concerts = $concerts->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 2)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'concerts' => $concerts,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdConcerts' => $arrayIdConcerts
        );
        return view('concert.concert')->with($data);
    }

    public function sortShowingConcert(Request $request)
    {
        $x = $concerts = $z = array();
        $concert = $request->show;
        foreach ($concert as $k => $v) {
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
            $concerts = Collection::make($z);
            $concerts = new LengthAwarePaginator($concerts, $concerts->count(),100);
        }
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 2)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'concerts' => $concerts,
            'genres' => $genres,
            'sort' => 1,
            'arrayIdConcerts' => $concert
        );
        return view('concert.concert')->with($data);
    }
    public function speaker()
    {
        return view('concert.concert-speaker');
    }
}
