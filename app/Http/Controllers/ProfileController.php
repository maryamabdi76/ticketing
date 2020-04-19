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

class ProfileController extends Controller
{
    public function profile(){

        $wallet= Wallets::Where('users_id',auth()->user()->id)->get();
        $money=$wallet[0]['money'];

        $lastfactors= Factors::Where('users_id',auth()->user()->id)->get();
        $factorcount=count($lastfactors);

        $data = array(
            'money' => $money,
            'factorcount' => $factorcount
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
        $ids=array();
        $i=0;
        $lastfactors= Factors::Where('users_id',auth()->user()->id)->with('Shows')->get();
        foreach($lastfactors as $v){
        $ids[$i]=$v->shows[0]->id;
        $i++;
        }
        $shows = Shows::join('Events','events.id','=','shows.events_id')
        ->join('Salons','salons.id','=','shows.salons_id')
        ->where(function($q) use ($ids){
            foreach($ids as $value){
                $q->orWhere('Shows.id', '=', $value);
            }
        })
        ->get(['events.name AS events_name', 'salons.name AS salons_name', 'shows.date AS shows_date', 'locations_id' , 'begin' ,'end' ,'price']);

        $count=count($lastfactors);
        $locations= Locations::all();
        $data = array(
            'lastfactors' => $lastfactors,
            'shows' => $shows,
            'locations' => $locations,
            'count'=> $count
        );
        // dd($data);die();
        return view('profile/lastfactors')->with($data);
    }


    public function favorites(){
        $favorites=Reviews::Where(['users_id'=> auth()->user()->id , 'favorite'=> 1])->with('Events')->get();
        $count=count($favorites);
        $data = array(
            'favorites' => $favorites,
            'count'=> $count
        );
        // dd($data);die();
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
