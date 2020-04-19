<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\User;

class ReviewController extends Controller
{
    public function review(Request $request){
        $users_id=auth()->user()->id;
        $events_id=$request->post('events_id');

        $request->validate([
            'rating' => 'numeric|min:0|max:5',
            'comment' => 'string|max:4000',
        ]);

        $form = new Reviews();
        $form->users_id=$users_id;
        $form->events_id=$request->post('events_id');
        $form->rating=$request->post('rating');
        $form->comment=$request->post('comment');
        $form->save();

        return redirect("movie-details/$events_id");

    }
}
