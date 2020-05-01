<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\User;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
        $users_id = auth()->user()->id;

        $form = new Reviews();
        $form->users_id = $users_id;
        $form->events_id = $request->post('events_id');
        $form->rating = $request->post('rating');
        $form->comment = $request->post('comment');
        $form->save();

        return response()->json("", 200);
    }

    public function favorite(Request $request){
        $events_id=$request->post('id');
        $users_id=auth()->user()->id;

        $user=User::find($users_id);
        $existence=$user->events()->where('id',$events_id)->get();
        if(empty($existence[0])){
            $user->events()->attach($events_id);
            $flag=1;
        }
        elseif(!empty($existence[0])){
            $user->events()->detach($events_id);
            $flag=0;
        }
        return response()->json(array('flag'=> $flag ), 200);
    }
}
