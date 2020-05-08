<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\Events;
use App\Models\Salons;
use App\Models\Factors;
use App\Models\Locations;
use App\Models\Discounts;
use App\User;
use phpDocumentor\Reflection\Location;
use Verta;

class CheckoutController extends Controller
{
    public function checkout($id)
    {
        $walletflag=0;
        $flag = strpos($id, '-');

        if ($flag){
            $get = explode('-',$id);
            $id = $get[0];
            $getmsg = $get[1];
            if($getmsg=="wallet"){$walletflag=1;}
        }

        $factor=Factors::where('id','=',$id)->with('Shows')->get();

        $events_id=$factor[0]->shows[0]->events_id;
        $event=Events::find($events_id);
        $eventname=$event->name;
        $eventcat=$event->categories_id;
        if($eventcat==1){$eventcat="movie";}
        if($eventcat==2){$eventcat="concert";}
        if($eventcat==3){$eventcat="theater";}

        $show_id=$factor[0]->shows[0]->id;
        $show = Shows::join('Events','events.id','=','shows.events_id')
        ->join('Salons','salons.id','=','shows.salons_id')
        ->where('shows.id','=',$show_id)
        ->get(['events.name AS events_name', 'salons.name AS salons_name', 'salons.id AS salons_id', 'shows.id AS shows_id', 'shows.date AS shows_date', 'locations_id' , 'begin' ,'end' ,'price']);

        $salons_id = $show[0]->salons_id;
        $shows_id = $show[0]->shows_id;
        $locations_id=$show[0]->locations_id;
        $location=Locations::find($locations_id);

        $date = $show[0]->shows_date;
        $shamsi = Verta::parse($date);
        $t = $shamsi->formatWord('l');
        $date = $t.' '.$date;

        $data = array(
            'factor' => $factor,
            'factor_id' => $id,
            'show' => $show,
            'events_id' => $events_id,
            'salons_id' => $salons_id,
            'shows_id' => $shows_id,
            'eventname' => $eventname,
            'eventcat' => $eventcat,
            'location' => $location,
            'walletflag' => $walletflag,
            'date' => $date
        );

        return view('checkout')->with($data);
    }

    public function discount(Request $request)
    {
        $discount_code = $request->post('discount');
        $discount = Discounts::where('code','=',$discount_code)->get();
        $factor_id = $request->post('factor_id');
        $factor = Factors::find($factor_id);
        $factor_discount=$factor->discount_id;

        if(empty($factor_discount)){
            if(!empty($discount[0])){
                $expire = $discount[0]->expire_date;
                $t = time();

                if($expire > $t){
                    $value = $discount[0]->value;
                    $sum = $factor->sum;

                    if (strpos($value, '%') !== FALSE){
                        $percentage = str_replace("%","",$value);

                        $new_discount = ($percentage / 100) * $sum;
                        $new_total = $sum - $new_discount;
                        $factor->discount_id = $discount[0]->id;
                        $factor->discount = $new_discount;
                        $factor->total = $new_total;
                        $factor->save();
                        $msg="";
                        $flag=1;
                    }
                    elseif($sum-$value < 10000){
                        $minimum = $value+10000;
                        $msg="استفاده از این کد تخفیف تنها برای فاکتور های بالای $minimum تومان امکان پذیر می باشد.";
                        $flag=0;
                    }
                    else{
                        $new_total = $sum - $value;
                        $new_discount = $value;
                        $factor->discount_id = $discount[0]->id;
                        $factor->discount = $new_discount;
                        $factor->total = $new_total;
                        $factor->save();
                        $msg="";
                        $flag=1;
                    }
                }
                else{
                    $msg="متاسفانه فرصت استفاده از این کد تخفیف به پایان رسیده.";
                    $flag=0;
                }
            }
            else{
                $msg="کد تخفیف وارد شده معتبر نمی باشد.";
                $flag=0;
            }
        }
        elseif(!empty($factor_discount)){
            $msg="متاسفانه تنها از یک کد تخفیف برای هر خرید می توانید استفاده کنید.";
            $flag=0;
        }

        return response()->json(array('flag'=> $flag, 'msg'=> $msg), 200);


    }

    public function removediscount($id){
        $factor = Factors::find($id);
        $factor->discount = 0;
        $factor->discount_id = null;
        $factor->total = $factor->sum;
        $factor->save();
        return redirect("checkout/$id");
    }

    public function finalize($id)
    {
        $factor_id = $id;
        $factor = Factors::where('id','=',$factor_id)->with('shows')->get();
        $show_id = $factor[0]->shows[0]->id;
        $event_id = $factor[0]->shows[0]->events_id;

        $event = Events::where('id','=',$event_id)->get();
        $eventcat=$event[0]->categories_id;
        if($eventcat==1){
            $factorCode = $factor_id.$show_id;
            $Cfactor = Factors::find($factor_id);
            $Cfactor->code = $factorCode;
            $Cfactor->save();
            $data = array(
                'flag' => 0,
                'code' => $factorCode,
            );
            return view('thank')->with($data);
        }
        if($eventcat==2 || $eventcat==3){
            $data = array(
                'flag' => 1,
                'factor_id' => $factor_id,
            );
            return view('thank')->with($data);

        }
    }

    public function printTicket($id){
        $i=0;
        $seats=array();
        $factor_id = $id;
        $factor = Factors::where('id','=',$factor_id)->with('shows')->get();
        $user_id = $factor[0]->users_id;
        $total = $factor[0]->total;
        $event_id = $factor[0]->shows[0]->events_id;

        $date = $factor[0]->shows[0]->date;
        $shamsi = Verta::parse($date);
        $t = $shamsi->formatWord('l');
        $date = $t.' '.$date;

        $begin = $factor[0]->shows[0]->begin;
        $end = $factor[0]->shows[0]->end;
        $salon_id = $factor[0]->shows[0]->salons_id;

        foreach($factor[0]->shows as $fs ){
            $seats[$i]=$fs->pivot->seat_number;
            $i++;
        }
        $count=count($seats);

        $event = Events::where('id','=',$event_id)->get();
        $eventname = $event[0]->name;
        $eventcat=$event[0]->categories_id;
        if($eventcat==2){$eventcat="کنسرت";$act=$event[0]->act;}
        if($eventcat==3){$eventcat="تئاتر";$act="";}
        $salons = Salons::where('id','=',$salon_id)->with('locations','segments')->get();
        $salon = $salons[0]->name;
        $segment = $salons[0]->segments[0]->name;
        $location = $salons[0]->locations->name;
        $Address = $salons[0]->locations->province.','.$salons[0]->locations->city.','.$salons[0]->locations->address;

        $user = User::where('id','=',$user_id)->get();
        $name = $user[0]->name;
        $gender = $user[0]->gender;
        if($gender==1){$gender="خانم";}
        if($gender==2){$gender="آقای";}

        $data = array(
            'count' => $count,
            'event' => $event,
            'name' => $name,
            'gender' => $gender,
            'total' => $total,
            'eventname' => $eventname,
            'date' => $date,
            'begin' => $begin,
            'end' => $end,
            'salon' => $salon,
            'segment' => $segment,
            'location' => $location,
            'address' => $Address,
            'seats' => $seats,
            'factor_id' => $factor_id,
            'act' => $act,
            'eventcat' => $eventcat
        );
        return view('printTicket')->with($data);
    }
}
