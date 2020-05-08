<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\Events;
use App\Models\Salons;
use App\Models\Factors;
use App\Models\Locations;
use App\Reserve;
use Illuminate\Support\Facades\Redirect;

class SeatController extends Controller
{
    public function index(Request $request)
    {
        $salons_id = $request->post('salons_id');
        $shows_id = $request->post('shows_id');
        $segments=$myseats=array();
        $i=$j=$price=0;
        $flag = false;

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

        $event=Events::where('id','=',$event_id)->get();
        $show_name= $event[0]->name;
        $eventcat=$event[0]->categories_id;
        if($eventcat==1){$eventcat="movie";}
        if($eventcat==2){$eventcat="concert";}
        if($eventcat==3){$eventcat="theater";}

        $id=auth()->user()->id;
        $factor=Factors::where([['users_id', '=', $id],['status', '=', 1]])->with('shows')->get();
        foreach($factor as $f){
            if($f->shows[0]->id==$shows_id){
                $flag = true;
                $factor_id = $f->id;
                $index=$i;
            }
            $i++;
        }
         if(!empty($factor[0]) && $flag){
            $factor=$factor[$index]->shows;
            foreach($factor as $f){
                $myseats[$j]= $f->pivot->seat_number;
                $j++;
            }
            $zeroseat=array_search(0, $myseats);
            unset($myseats[$zeroseat]);
        }
        else{
            $t=time();
            $factor= new Factors();
            $factor->users_id=$id;
            $factor->sum=0;
            $factor->total=0;
            $factor->status=1;
            $factor->purchase_date=$t;
            $factor->save();

            $factor_id= Factors::where([['users_id','=',$id],['purchase_date','=',$t]])->get();
            $factor_id=$factor_id[0]->id;
            $newfactor = Factors::find($factor_id);
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
            'myseats' => $myseats,
            'alphabet' => $alphabet,
            'price' => $price
        );
        return view('seat')->with($data);
    }


    public function seat(Request $request)
    {
        $i=0;
        $taken_seats=array();
        $seats="";
        $seat_number=$request->post('id');
        $shows_id=$request->post('shows_id');
        $factor_id=$request->post('factor_id');

        $taken=Shows::where('id','=',$shows_id)->with('factors')->get();
        $taken=$taken[0]->factors;
        foreach($taken as $v){
            $taken_seats[$i]= $v->pivot->seat_number;
            $i++;
        }

        if(in_array($seat_number, $taken_seats)){
            $shows = Shows::find($shows_id);
            $shows->factors()->where('id',$factor_id)->wherePivot('seat_number',$seat_number)->detach();
        }
        else{
            $factor = Factors::find($factor_id);
            $factor->shows()->attach($shows_id,['seat_number' => $seat_number]);
        }

        $factor=Factors::where('id','=',$factor_id)->with('Shows')->get();
        foreach($factor[0]->shows as $a){
            $seats.=','.$a->pivot->seat_number;
            $seats = str_replace(",0,","",$seats);

        }

      return response()->json(array('seats'=> $seats ), 200);
    }

    public function reserve(Request $request) {
        $i=$sum=0;
        $seats=array();
        $factor_id=$request->post('factor_id');
        $username = auth()->user()->username;

        if(!empty($request->post('seat'))){
            if (is_array($request->post('seat'))) {
                foreach($request->post('seat') as $value){
                $seats[$i] = $value;
                $i++;
                }
            } else {
                $seats[0] = $request->post('seat');
            }
        }
        foreach($seats as $price){
            $sum+=$price;
        }

        $factor= Factors::find($factor_id);
        $factor->sum=$sum;
        $factor->total=$sum;
        $factor->status=1;
        $factor->save();

        return redirect("checkout/$factor_id");
    }


    public function seatsLiveFeed(Request $request){
        $i=$j=0;
        $taken_seats=$myseats=array();
        $shows_id=$request->post('shows_id');
        $factor_id=$request->post('factor_id');

        $taken=Shows::where('id','=',$shows_id)->with('factors')->get();
        $taken=$taken[0]->factors;

        foreach($taken as $v){
            $taken_seats[$i]= $v->pivot->seat_number;
            $i++;
        }

        $factor = Factors::where('id','=',$factor_id)->with('shows')->get();
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

        return response()->json(array('taken_seats'=> $taken_seats ), 200);

    }
}
