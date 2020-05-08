<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Images;
use App\Models\Events;
use App\Models\Categories;
use App\Models\Shows;
use App\Models\Salons;
use App\Models\Genres;
use App\Models\Factors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class AdminReserveController extends Controller
{

/**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($getval)
    {
        $get = explode('-',$getval);
        $salons_id = $get[0];
        $shows_id = $get[1];
        $segments=$taken_seats=$myseats=array();
        $i=$j=$price=0;

        $salon= Salons::where('id','=',$salons_id)->with('segments','locations')->get();
        $salon=$salon[0];
        $salon_name=$salon->name;

        foreach($salon->segments as $v){
            $segments[$v->orders]=$v;
        }
        ksort($segments);

        $taken=Shows::where('id','=',$shows_id)->with('factors')->get();
        $event_id=$taken[0]->events_id;
        $price=$taken[0]->price;
        $taken=$taken[0]->factors;

        $event=Events::where('id','=',$event_id)->get();
        $show_name= $event[0]->name;
        $eventcat=$event[0]->categories_id;
        if($eventcat==1){$eventcat="movie";}
        if($eventcat==2){$eventcat="concert";}
        if($eventcat==3){$eventcat="theater";}

        foreach($taken as $v){
            $taken_seats[$i]= $v->pivot->seat_number;
            $i++;
        }

        $id=auth()->user()->id;
        $factor=Factors::where([['users_id', '=', $id],['status', '=', 4]])->with('shows')->get();
         if(!empty($factor[0]) && $factor[0]->shows[0]->id==$shows_id){
            $factor_id=$factor[0]->id;
            $factor=$factor[0]->shows;
            foreach($factor as $f){
                $myseats[$j]= $f->pivot->seat_number;
                $j++;
            }
            foreach($myseats as $ms){
                if (($key = array_search($ms, $taken_seats)) !== false) {
                    unset($taken_seats[$key]);
                }
            }
            $zeroseat=array_search(0, $myseats);
            unset($myseats[$zeroseat]);
        }
        else{
            $newfactor = Factors::find(1);
            $newfactor->shows()->attach($shows_id,['seat_number' => 0]);
        }

        $location=$salon->locations;
        $alphabet = range('A', 'Z');
        $data = array(
            'shows_id' =>$shows_id,
            'show_name' =>$show_name,
            'factor_id' =>$factor_id,
            'events_id' =>$event_id,
            'eventcat' =>$eventcat,
            'salon_name' => $salon_name,
            'segments' => $segments,
            'location' => $location,
            'taken_seats' => $taken_seats,
            'myseats' => $myseats,
            'alphabet' => $alphabet,
            'price' => $price
        );
        return view('admin.shows.show')->with($data);
    }

    public function adminChosenSeat(Request $request)
    {
        $i=0;
        $taken_seats=array();
        $seats="";
        $seat_number=$request->post('id');
        $shows_id=$request->post('shows_id');

        $taken=Shows::where('id','=',$shows_id)->with('factors')->get();
        $taken=$taken[0]->factors;
        foreach($taken as $v){
            $taken_seats[$i]= $v->pivot->seat_number;
            $i++;
        }

        if(in_array($seat_number, $taken_seats)){
            $shows = Shows::find($shows_id);
            $shows->factors()->where('id',1)->wherePivot('seat_number',$seat_number)->detach();
        }
        else{
            $factor = Factors::find(1);
            $factor->shows()->attach($shows_id,['seat_number' => $seat_number]);
        }

        $factor=Factors::where('id','=',1)->with('Shows')->get();
        foreach($factor[0]->shows as $a){
            $seats.=','.$a->pivot->seat_number;
            $seats = str_replace(",0,","",$seats);

        }

      return response()->json(array('seats'=> $seats ), 200);
    }
}
