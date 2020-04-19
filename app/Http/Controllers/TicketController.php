<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\Events;
use App\Models\Salons;
use App\Models\Factors;
use App\Models\Locations;

class TicketController extends Controller
{
    public function ticket(Request $request)
    {
        $ids=array();
        $count=$sans=array();
        $i=$j=0;
        $id=$request->post('id');
        $date=$request->post('date');

        $eventname=Events::find($id);
        $eventname=$eventname->name;

        $shows = Shows::where('events_id','=',$id)->get();
        foreach($shows as $v){
            $ids[$i]=$v->salons_id;
            $i++;
            }

            $sans = Salons::join('Shows','shows.salons_id','=','salons.id')
                ->join('Locations','locations.id','=','salons.locations_id')
                ->where(function($q) use ($ids,$id,$date){
                    foreach($ids as $value){
                        $q->orWhere([['salons.id', '=', $value],['events_id', '=', $id],['shows.date', '=', $date ]]);
                    }
                })
                ->get(['shows.id AS shows_id', 'salons.id AS salons_id', 'locations_id' , 'begin']);

            foreach($sans as $v){
                $count[$j]=$v->locations_id;
                $j++;
                }
            $count = array_unique($count);

        $locations= Locations::get(['name','id']);
        $data = array(
            'sans' => $sans,
            'locations' => $locations,
            'count' => $count,
            'event' => $id,
            'eventname'=>$eventname
        );
        // dd($id);die();

        return view('ticket')->with($data);
    }

}
