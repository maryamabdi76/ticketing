<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Factors;
use App\Models\Addresses;
use App\Models\Events;
use App\Models\Wallets;
use App\Models\Reviews;
use App\Models\Shows;
use App\Models\Locations;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\DB;
use Verta;

class ProfileController extends Controller
{
    public function profile(){

        $wallet= Wallets::Where('users_id',auth()->user()->id)->get();
        $money=$wallet[0]['money'];

        $lastfactors= Factors::Where('users_id',auth()->user()->id)->get();
        $factorcount=count($lastfactors);

        $favorites=User::Where('id','=',auth()->user()->id)->with('Events')->get();
        $favorites=$favorites[0]->events;
        $favoritecount=count($favorites);

        $data = array(
            'money' => $money,
            'factorcount' => $factorcount,
            'favoritecount' => $favoritecount

        );
        return view('profile/profile')->with($data);
    }


    public function proinfoedit(){
        return view('profile/proinfoedit');
    }


    public function proinfoupdate(Request $request){
        $id=auth()->user()->id;
        $user=User::find($id);
        $uniqueEmail='unique:users';
        $uniqueUname='unique:users';
        $string= $min= $confirmed='';

        if($user['email']===$request->post('email')){
            $uniqueEmail='';
        }
        if($user['username']===$request->post('username')){
            $uniqueUname='';
        }
        if($request->post('password')){
            $string='string';
            $min='min:8';
            $confirmed='confirmed';
        }


        $this->validate($request, [
            'username'=>['required', 'string', 'max:255', $uniqueUname],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', $uniqueEmail],
            'phone'=>'required|numeric|digits:11',
            'password' => [$string, $min, $confirmed],
        ]);

        $form = User::find($id);
        $form->name=$request->post('name');
        $form->username=$request->post('username');
        $form->email=$request->post('email');
        $form->phone=$request->post('phone');

        if($request->post('password')){
            $form->password= Hash::make($request->post('password'));
        }

        $form->save();
        return view('profile/profile');
    }


    public function addressedit(){
        $address= Addresses::Where('users_id',auth()->user()->id)->get();
        $data = array(
            'address' => $address
        );
        return view('profile/addressedit')->with($data);
    }


    public function wallet(){
        $money= Wallets::Where('users_id',auth()->user()->id)->get();
        $data = array(
            'money' => $money
        );
        return view('profile/wallet')->with($data);
    }


    public function lastfactors(){
        $ids=$shows=$locations=array();
        $count=$i=0;
        $lastfactors= Factors::Where('users_id',auth()->user()->id)->with('Shows')->get();
        if(!empty($lastfactors[0])){
            foreach($lastfactors as $v){
            $ids[$i]=$v->shows[0]->id;
            $i++;
            }
            $ooshows = Shows::join('Events','events.id','=','shows.events_id')
            ->join('Salons','salons.id','=','shows.salons_id')
            ->where(function($q) use ($ids){
                foreach($ids as $value){
                    $q->orWhere('Shows.id', '=', $value);
                }
            })
            ->get(['events.name AS events_name', 'events.categories_id AS catid', 'salons.name AS salons_name', 'shows.date AS shows_date', 'shows.id AS shows_id', 'locations_id' , 'begin' ,'end' ,'price']);

            foreach($ooshows as $s){
                $shows[$s->shows_id]=$s;
            }

            $count=count($lastfactors);
            $locations= Locations::all();
        }

        foreach($shows as $sh){
            $shamsi = Verta::parse($sh->shows_date);
            $t = $shamsi->formatWord('l');
            $sh->shows_date = $t.' '.$sh->shows_date;
        }

        foreach($lastfactors as $lf){
            $pd = intval($lf->purchase_date);
            $purchase_date = Verta::createTimestamp($pd);
            $lf->purchase_date = $purchase_date;
        }

        $data = array(
            'lastfactors' => $lastfactors,
            'shows' => $shows,
            'locations' => $locations,
            'count'=> $count
        );
        return view('profile/lastfactors')->with($data);
    }


    public function favorites(){
        $favorites=User::Where('id','=',auth()->user()->id)->with('Events')->get();
        $favorites=$favorites[0]->events;
        $count=count($favorites);
        $data = array(
            'favorites' => $favorites,
            'count'=> $count
        );
        return view('profile/favorites')->with($data);
    }


    public function work(){
        return view('profile/work');
    }


    public function invoice(){
        $money= Wallets::Where('users_id',auth()->user()->id)->get();
        $data = array(
            'money' => $money
        );
        return view('profile/invoice')->with($data);
    }
}
