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

class ConcertController extends Controller
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
        $concert = Events::with('Genres')->where('categories_id', 2)->get();
        return view('admin.concerts.index')->with('concert', $concert);
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
        return view('admin.concerts.add')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'act' => 'required|string',
            'team' => 'required|string',
            'date' => 'required|string|max:255'
        ]);

        $concert = Events::create([
            'categories_id' => 2,
            'name' => $request['name'],
            'act' => $request['act'],
            'team' => $request['team'],
            'description' => $request['description'],
            'date' => $request['date'],
        ]);

        if ($request->post('genre')) {
            foreach ($request->post('genre') as $genre) {
                $concert->Genres()->attach($genre);
            }
        }
        if ($request->file('imagefile')) {
            $files = $request->file('imagefile');
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/concerts/', $imagename);
                $concert->Images()->create(['path' => 'images/concerts/' . $imagename, 'imageable_id' => $concert->id]);
            }
        }
        return redirect('admin/concerts');
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
            'concert' => Events::find($id)
        );
        return view('admin.concerts.show')->with($data);
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
            'concert' => Events::find($id),
            'genres' => Genres::all()
        );
        return view('admin.concerts.edit')->with($data);
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
        // dd($request);
        $id = $request->id;
        $form = Events::find($id);
        $form->name = $request->post('name');
        $form->categories_id = 2;
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
                // dd($photoid[$k]);
                $imagename = $file->getClientOriginalName();
                $file->move('images/concerts/', $imagename);
                Images::where('id', $photoid[$k])->update(['path' => 'images/concerts/' . $imagename, 'imageable_id' => $form->id]);
            }
        if ($files)
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/concerts/', $imagename);
                $form->Images()->create(['path' => 'images/concerts/' . $imagename, 'imageable_id' => $form->id]);
            }
        return redirect('admin/concerts');
    }

    public function deleteConcertPhoto($id, $pid)
    {
        $image = Images::find($id);
        $image->delete();
        return redirect("editConcert/$pid");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $concert = Events::find($id);
        $concert->delete();
        return redirect('/admin/concerts');
    }
}
