<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Reviews;
use App\Models\Factors;
use App\Models\Sliders;
use App\Models\Locations;
use App\Models\Shows;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $bestsell = (Factors::join('factors_show', 'factors.id', '=', 'factors_show.factors_id')
            ->select('factors.id', 'factors_show.shows_id')
            ->groupBy('factors.id', 'factors_show.shows_id', 'factors_show.factors_id'))
            ->get()->groupBy('shows_id', 'factors.id');
        // ->join('shows','shows.id','=','shows_id')
        // ->join('events','events.id','=','shows.events_id');
        // foreach ($bestsell as $k => $v) {
        //     $x[$k] = count($v);
        // }
        // arsort($x);
        // dd($bestsell->sortByDesc(function($item){
        //     return $item;
        // }));
        $bestsell = $bestsell->sortByDesc(function ($item) {
            return $item;
        })->take(5);
        foreach ($bestsell as $k => $v) {
            $x[] = Events::join('shows', 'events.id', 'shows.events_id')->where('shows.id', '=', $k)->get();
            // dd($event);
            // return $x;
            // $x[] = $k;
        }
        // dd($bestsell);
        $data = array(
            'events' => Events::all(),
            'x' => $x,
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
}
