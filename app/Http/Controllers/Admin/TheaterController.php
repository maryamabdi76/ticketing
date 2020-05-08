<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Images;
use App\Models\Events;
use App\Models\Categories;
use App\Models\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class TheaterController extends Controller
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
        $theater = Events::with('Genres')->where('categories_id', 3)->get();
        return view('admin.theaters.index')->with('theater', $theater);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'genres' => Genres::all()
        );
        return view('admin.theaters.add')->with($data);
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
            'name' => 'required|string|max:255',
            'act' => 'required|string',
            'team' => 'required|string',
            'date' => 'required|string|max:255'
        ]);

        $theater = Events::create([
            'categories_id' => 3,
            'name' => $request['name'],
            'act' => $request['act'],
            'team' => $request['team'],
            'description' => '',
            'date' => $request['date'],
        ]);

        if ($request->post('genre')) {
            foreach ($request->post('genre') as $genre) {
                $theater->Genres()->attach($genre);
            }
        }
        if ($request->file('imagefile')) {
            $files = $request->file('imagefile');
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/theaters/', $imagename);
                $theater->Images()->create(['path' => 'images/theaters/' . $imagename, 'imageable_id' => $theater->id]);
            }
        }
        return redirect('admin/theaters');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'theater' => Events::find($id)
        );
        return view('admin.theaters.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'theater' => Events::find($id),
            'genres' => Genres::all()
        );
        return view('admin.theaters.edit')->with($data);
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
        $form = Events::find($id);
        $form->name = $request->post('name');
        $form->categories_id = 3;
        $form->act = $request->post('act');
        $form->team = $request->post('team');
        $form->description = '';
        $form->date = $request->post('date');
        if ($request->post('genre')) {
            foreach ($request->post('genre') as $genre) {
                $form->Genres()->sync([$genre]);
            }
        }
        $form->save();

        $photoid = $request->post('photoid');
        $files = $request->file('imagefile');
        $filesupdate = $request->file('file');
        if ($filesupdate)
            foreach ($filesupdate as $k => $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/theaters/', $imagename);
                Images::where('id', $photoid[$k])->update(['path' => 'images/theaters/' . $imagename, 'imageable_id' => $form->id]);
            }
        if ($files)
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/theaters/', $imagename);
                $form->Images()->create(['path' => 'images/theaters/' . $imagename, 'imageable_id' => $form->id]);
            }
        return redirect('admin/theaters');
    }

    public function deleteTheaterPhoto($id, $pid)
    {
        $image = Images::find($id);
        $image->delete();
        return redirect("editTheater/$pid");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    // public function destroy(User $user)
    public function destroy($id)
    {
        $theater = Events::find($id);
        $theater->delete();
        return redirect('/admin/theaters');
    }
}
