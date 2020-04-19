<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\Events;
use App\Models\Salons;
use App\Models\Factors;
use App\Models\Locations;

class SeatController extends Controller
{
    public function index(Request $request)
    {
        $salons_id = $request->post('salons_id');
        $shows_id = $request->post('shows_id');
        $segments=$taken_Seats=array();
        $i=0;

        $salon= Salons::where('id','=',$salons_id)->with('segments','locations')->get();
        $salon=$salon[0];
        $salon_name=$salon->name;

        foreach($salon->segments as $v){
            $segments[$v->orders]=$v;
        }
        ksort($segments);

        $taken=Shows::where('id','=',$shows_id)->with('factors')->get();
        $taken=$taken[0]->factors;
        foreach($taken as $v){
            $taken_seats[$i]= $v->pivot->seat_number;
            $i++;
        }

        $location=$salon->locations;
        $alphabet = range('A', 'Z');
        $data = array(
            'shows_id' =>$shows_id,
            'salon_name' => $salon_name,
            'segments' => $segments,
            'location' => $location,
            'taken_seats' => $taken_seats,
            'alphabet' => $alphabet
        );
        // dd($taken_Seats);die();
        return view('seat')->with($data);
    }


    public function seat(Request $request)
    {
        $i=$j=$sum=0;
        $seats=array();
        $chosen_seats=array();
        $shows_id=$request->post('shows_id');

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

        foreach($seats as $s){
            $val=explode('/',$s);
            $chosen_seats[$j]=$val[0];
            $sum+=$val[1];
            $j++;
        }

        $data = array(
            'chosen_seats' => $chosen_seats,
            'sum' => $sum
        );

        // $t=date("Y-m-d",time());
        $t=time();
        $id=auth()->user()->id;

        $factor= new Factors();
        $factor->users_id=$id;
        $factor->sum=$sum;
        $factor->total=$sum;
        $factor->status=1;
        $factor->purchase_date=$t;
        $factor->save();

        $shows= Shows::find($shows_id);
        foreach($chosen_seats as $cs){
        $factor->Shows()->attach($shows->id,['seat_number' => $cs]);
        }

        $factor_id= Factors::where([['users_id','=',$id],['purchase_date','=',$t]])->get();
        $factor_id=$factor_id[0]->id;


        // dd($factor_id);die;
        return redirect("checkout/$factor_id");
    }

}
