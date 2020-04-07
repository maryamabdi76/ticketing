<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile/profile');
    }
    public function proinfoedit(){
        return view('profile/proinfoedit');
    }
    public function addressedit(){
        return view('profile/addressedit');
    }
    public function wallet(){
        return view('profile/wallet');
    }
    public function lastfactors(){
        return view('profile/lastfactors');
    }
    public function liked(){
        return view('profile/liked');
    }

}
