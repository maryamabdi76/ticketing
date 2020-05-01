<?php
namespace App\Http\Controllers;
use Illuminate\Support\Collection;

use App\Models\Events;
use App\Models\Genres;
use App\Models\Reviews;
use App\Models\Factors;
use App\Models\Sliders;
use App\Models\Locations;
use App\Models\Shows;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class SiteController extends Controller
{
    public function index()
    {
        $best = (Factors::join('factors_show', 'factors.id', '=', 'factors_show.factors_id')
            ->select('factors.id', 'factors_show.shows_id')
            ->groupBy('factors.id', 'factors_show.shows_id', 'factors_show.factors_id'))
            ->get()->groupBy('shows_id', 'factors.id');
        foreach ($best as $k => $v) {
            $showid[$k] = $v->count();
        }
        uasort($showid, function ($a, $b) {
            if ($a == $b) return 0;
            return ($a < $b) ? 1 : -1;
        });
        foreach ($showid as $k => $v) {
            $bestshow[] = Events::join('shows', 'events.id', 'shows.events_id')->where('shows.id', '=', $k)->select('events.id')->get();
        }
        foreach ($bestshow as $k => $v) {
            $x[] = $v[0]->id;
        }
        $x = array_slice(array_unique($x), 0, 6);
        //find event
        foreach ($x as $v) {
            $bestsell[] = Events::where('id', '=', $v)->get();
        }
        $data = array(
            'events' => Events::all(),
            'x' => $bestsell,
            'locations' => Locations::all(),
            'shows' => Shows::all(),
            'mostratings' => Reviews::select('events_id', DB::raw('avg(rating) as rate'))
                ->groupBy('events_id')
                ->having('rate', '>=', 3)
                ->orderBy('rate')
                ->take(5)
                ->get(),
            'sliders' => Sliders::all()
        );
        return view('bilito')->with($data);
    }


    public function sho($sho)
    {
    }

    public function search(Request $request)
    {
        $arrayIdSearch=array();
        $search = $request->search;
        $query = Events::where('events.name', 'like', "%{$search}%")->orderBy('id','desc');
        foreach ($query->get() as $v)
            $arrayIdSearch[] = $v->id;
        $events =$query->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'events' => $events,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdSearch' => $arrayIdSearch
        );
        return view('search')->with($data);
    }

    public function searchgenre(Request $request)
    {
        $arrayIdSearch=array();
        $checkbox = $request['genre'];
        $query = Events::join('events_genre', 'events.id', '=', 'events_genre.events_id')
            ->join('genres', 'genres.id', '=', 'events_genre.genres_id')->Where(function ($query) use ($checkbox) {
                for ($i = 0; $i < count($checkbox); $i++) {
                    if ($checkbox[$i] == '*')
                        $query->select('* from events');
                    else
                        $query->orwhere('genres.name', $checkbox[$i]);
                }
            })->select('events.id', 'events.name', 'events.date')->orderBy('id', 'desc');
        foreach ($query->get() as $v)
            $arrayIdSearch[] = $v->id;
        $events = $query->paginate(6);
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'events' => $events,
            'genres' => $genres,
            'sort' => 0,
            'arrayIdSearch' => $arrayIdSearch
        );
        return view('search')->with($data);
    }

    public function sortShowingSearch(Request $request)
    {
        $x = $events = $z = array();
        $event = $request->show;
        foreach ($event as $k => $v) {
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
            $events = Collection::make($z);
            $events = new LengthAwarePaginator($events, $events->count(),100);
        }
        $genres = Genres::join('events_genre', 'genres.id', '=', 'events_genre.genres_id')
            ->join('events', 'events.id', '=', 'events_genre.events_id')
            ->select('genres.id', 'genres.name')->groupBy('id', 'genres.name')->get();
        $data = array(
            'shows' => Shows::all(),
            'locations' => Locations::all(),
            'events' => $events,
            'genres' => $genres,
            'sort' => 1,
            'arrayIdSearch' => $event
        );
        return view('search')->with($data);
    }

}
