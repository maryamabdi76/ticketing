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

class MovieController extends Controller
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
        $movie = Events::with('Genres')->where('categories_id', 1)->get();
        return view('admin.movies.index')->with('movie', $movie);
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
        return view('admin.movies.add')->with($data);
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

        $movie = Events::create([
            'categories_id' => 1,
            'name' => $request['name'],
            'act' => $request['act'],
            'team' => $request['team'],
            'description' => $request['description'],
            'date' => $request['date'],
        ]);
        if ($request->post('genre')) {
            foreach ($request->post('genre') as $genre) {
                $movie->Genres()->attach($genre);
            }
        }
        if ($request->file('imagefile')) {
            $files = $request->file('imagefile');
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/movies/', $imagename);
                $movie->Images()->create(['path' => 'images/movies/' . $imagename, 'imageable_id' => $movie->id]);
            }
        }
        return redirect('admin/movies');
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
            'movie' => Events::find($id)
        );
        return view('admin.movies.show')->with($data);
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
            'movie' => Events::find($id),
            'genres' => Genres::all()
        );
        return view('admin.movies.edit')->with($data);
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
        $form->categories_id = 1;
        $form->act = $request->post('act');
        $form->team = $request->post('team');
        $form->description = $request->post('description');
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
                $file->move('images/movies/', $imagename);
                Images::where('id', $photoid[$k])->update(['path' => 'images/movies/' . $imagename, 'imageable_id' => $form->id]);
            }
        if ($files)
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/movies/', $imagename);
                $form->Images()->create(['path' => 'images/movies/' . $imagename, 'imageable_id' => $form->id]);
            }
        return redirect('admin/movies');
    }

    public function deleteMoviePhoto($id, $pid)
    {
        $image = Images::find($id);
        $image->delete();
        return redirect("editMovie/$pid");
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
        $movie = Events::find($id);
        $movie->delete();
        return redirect('/admin/movies');
    }
}
