<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movie.movie');
    }
    public function details()
    {
        return view('movie.movie-details');
    }
    public function ticket()
    {
        return view('movie.movie-ticket');
    }
    public function seat()
    {
        return view('movie.movie-seat');
    }
    public function checkout()
    {
        return view('movie.movie-checkout');
    }
}
