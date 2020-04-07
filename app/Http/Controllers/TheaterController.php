<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheaterController extends Controller
{
    public function index()
    {
        return view('theater.theater');
    }
    public function details()
    {
        return view('theater.theater-details');
    }
    public function ticket()
    {
        return view('theater.theater-ticket');
    }
    public function seat()
    {
        return view('theater.theater-seat');
    }
    public function checkout()
    {
        return view('theater.theater-checkout');
    }
    public function speaker()
    {
        return view('theater.theater-speaker');
    }
}
