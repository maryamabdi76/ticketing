<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Images;
use App\Models\Events;
use App\Models\Categories;
use App\Models\Shows;
use App\Models\Salons;
use App\Models\Genres;
use App\Models\Factors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class ShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Shows::all();
        return view('admin.shows.index')->with('show', $shows);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'event' => Events::all(),
            'salon' => Salons::all()
        );
        return view('admin.shows.add')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|string|max:255',
            'begin' => 'required|string',
            'end' => 'required|string',
            'num' => 'required|string|max:255'
        ]);

        Shows::create([
            'events_id' => $request['event'],
            'salons_id' => $request['salon'],
            'date' => $request['date'],
            'begin' => $request['begin'],
            'end' => $request['end'],
            'num' => $request['num'],
            'price' => $request['price'],
        ]);

        return redirect('admin/shows');
    }

    public function edit($id)
    {
        $data = array(
            'show' => Shows::findOrFail($id),
            'event' => Events::all(),
            'salon' => Salons::all()
        );
        return view('admin.shows.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $form = Shows::find($id);
        $form->events_id = $request['event'];
        $form->salons_id = $request['salon'];
        $form->date = $request['date'];
        $form->begin = $request['begin'];
        $form->end = $request['end'];
        $form->num = $request['num'];
        $form->price = $request['price'];
        $form->save();

        return redirect('admin/shows');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $show = Shows::find($id);
        $show->delete();
        return redirect('/admin/shows');
    }
}
