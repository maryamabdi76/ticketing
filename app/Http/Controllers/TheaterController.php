<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Genres;
use App\Models\Locations;
use App\Models\Shows;
use App\Models\Posts;
use App\Models\Reviews;

class TheaterController extends Controller
{
    public function index()
    {
        $theaters = Events::all()->where('categories_id', 3);
        $genres =Genres::join('events_genre','genres.id','=','events_genre.genres_id')
                ->join('events','events.id','=','events_genre.events_id')
                ->where('categories_id',3)
                ->select('genres.id','genres.name')->groupBy('id','genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'theaters'=>$theaters,
            'genres'=>$genres
        );
        return view('theater.theater')->with($data);
    }
    public function details($id)
    {

        $date=array();
        $i=$flag=0;

        $theater = Events::findOrFail($id);
        $related = Posts::where('events_id', $id)->get();
        $reviews = Reviews::where('events_id', $id)->with('user')->orderBy('created_at')->take(10)->get();
        $count = count($reviews);

        $shows = Shows::where('events_id','=',$id)->get();

        foreach($shows as $v){
            $date[$i]=$v->date;
            $i++;
            }
        $date = array_unique($date);

        if($date){
        $flag=1;
        }

        $data = array(
            'theater' => $theater,
            'related' => $related,
            'reviews' => $reviews,
            'count' =>$count,
            'date' =>$date,
            'flag' =>$flag,
            'id' => $id
        );

        // dd($reviews);die();

        return view('theater.theater-details')->with($data);
    }

    public function searchgenre(Request $request)
    {
        $checkbox = $request['genre'];
        $theaters = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
            ->join('genres', 'genres.id', '=', 'events_genre.genres_id')->Where(function ($query) use ($checkbox) {
                for ($i = 0; $i < count($checkbox); $i++) {
                    $query->orwhere('genres.name', $checkbox[$i]);
                }
            })
            ->where('categories_id', 3)->select('events.id', 'events.name', 'events.date')->get();
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 3)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'theaters' => $theaters,
            'genres' => $genres
        );
        return view('theater.theater')->with($data);
    }

    public function searchtheater(Request $request)
    {
        $city = $request->city;
        $date = $request->date;
        $cinema = $request->cinema;
        $search = $request->search;
        if (isset($city) || isset($date) || isset($cinema) || isset($search))
            $theaters = Events::where('categories_id', 3)->join('shows', 'shows.events_id', '=', 'events.id')
                ->join('salons', 'salons.id', '=', 'shows.salons_id')
                ->join('locations', 'locations.id', '=', 'salons.locations_id')
                ->where('locations.name', 'like', "%{$cinema}%")
                ->where('locations.city', 'like', "%{$city}%")
                ->where('shows.date', 'like', "%{$date}%")
                ->select('events.id', 'events.name', 'events.date')
                ->where('events.name', 'like', "%{$search}%")->get();
        else
            $theaters = Events::all()->where('categories_id', 3);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 3)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'theaters' => $theaters,
            'genres' => $genres
        );
        return view('theater.theater')->with($data);
    }
    public function genres($id)
    {
        $theaters = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
                ->join('genres', 'genres.id', '=', 'events_genre.genres_id')
                ->where('genres.id',$id)->where('categories_id', 3)->select('events.id', 'events.name', 'events.date')->get();
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->where('categories_id', 3)
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'theaters' => $theaters,
            'genres' => $genres
        );
        return view('theater.theater')->with($data);
    }

    public function speaker()
    {
        return view('theater.theater-speaker');
    }
}
