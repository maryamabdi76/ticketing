<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Images;
use App\Models\Sliders;
use App\Models\Events;
use App\Models\Categories;
use App\Models\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class SliderController extends Controller
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
        $slider = Sliders::with('Events')->get();
        return view('admin.sliders.index')->with('slider', $slider);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'event' => Events::all()
        );
        return view('admin.sliders.add')->with($data);
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
            'title' => 'required|string|max:255',
        ]);

        $slider = Sliders::create([
            'title' => $request['title'],
            'events_id' => $request['event'],
        ]);
        if ($request->file('imagefile')) {
            $file = $request->file('imagefile');
            $imagename = $file->getClientOriginalName();
            $file->move('images/sliders/', $imagename);
            $slider->Images()->create(['path' => 'images/sliders/' . $imagename, 'imageable_id' => $slider->id]);
        }
        return redirect('admin/sliders');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
            'slider' => Sliders::find($id),
            'event' => Events::all()
        );
        return view('admin.sliders.edit')->with($data);
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
        $form = Sliders::find($id);
        $form->title = $request->post('title');
        $form->events_id = $request->post('event');
        $form->save();

        $photoid = $request->post('photoid');
        $files = $request->file('imagefile');
        $filesupdate = $request->file('file');
        if ($filesupdate)
            foreach ($filesupdate as $k => $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/sliders/', $imagename);
                Images::where('id', $photoid[$k])->update(['path' => 'images/sliders/' . $imagename, 'imageable_id' => $form->id]);
            }
        return redirect('admin/sliders');
    }

    public function deleteSliderPhoto($id, $pid)
    {
        $image = Images::find($id);
        $image->delete();
        return redirect("editSlider/$pid");
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
        $slider = Sliders::find($id);
        $slider->delete();
        return redirect('/admin/sliders');
    }
}
