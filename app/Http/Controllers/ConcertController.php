<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
    {
        return view('concert.concert');
    }
    public function details()
    {
        return view('concert.concert-details');
    }
    public function ticket()
    {
        return view('concert.concert-ticket');
    }
    public function seat()
    {
        return view('concert.concert-seat');
    }
    public function checkout()
    {
        return view('concert.concert-checkout');
    }
    public function speaker()
    {
        return view('concert.concert-speaker');
    }
}
