<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\Events;
use App\Models\Salons;
use App\Models\Factors;
use App\Models\Locations;

class CheckoutController extends Controller
{
    public function checkout($id)
    {
        $factor=Factors::where('id','=',$id)->with('Shows')->get();

        $events_id=$factor[0]->shows[0]->events_id;
        $eventname=Events::find($events_id);
        $eventname=$eventname->name;

        $show_id=$factor[0]->shows[0]->id;
        $show = Shows::join('Events','events.id','=','shows.events_id')
        ->join('Salons','salons.id','=','shows.salons_id')
        ->where('shows.id','=',$show_id)
        ->get(['events.name AS events_name', 'salons.name AS salons_name', 'shows.date AS shows_date', 'locations_id' , 'begin' ,'end' ,'price']);

        $locations_id=$show[0]->locations_id;
        $location=Locations::find($locations_id);

        $data = array(
            'factor' => $factor,
            'show' => $show,
            'eventname'=>$eventname,
            'location' => $location
        );
        // dd($data);die();
        return view('checkout')->with($data);
    }

}
