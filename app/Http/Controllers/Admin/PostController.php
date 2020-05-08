<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Images;
use App\Models\Videos;
use App\Models\Events;
use App\Models\Categories;
use App\Models\Genres;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

use Carbon\Carbon;

class PostController extends Controller
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
        $post = Posts::with('Events')->get();
        return view('admin.posts.index')->with('post', $post);
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
        return view('admin.posts.add')->with($data);
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
            'content' => 'required|string',
        ]);
        $post = Posts::create([
            'events_id' => $request['event'],
            'title' => $request['title'],
            'content' => $request['content'],
        ]);

        if ($request->file('imagefile')) {
            $files = $request->file('imagefile');
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/blogs/', $imagename);
                $post->Images()->create(['path' => 'images/blogs/' . $imagename, 'imageable_id' => $post->id]);
            }
        }

        if ($request->file('videofile')) {
            // dd($request->file('videofile')->width());
            $file = $request->file('videofile');
            $videoname = $file->getClientOriginalName();
            $file->move('images/blogs/', $videoname);
            $post->Videos()->create(['source' => 'images/blogs/' . $videoname, 'title' => $videoname, 'width' => 100, 'height' => 100, 'videoable_id' => $post->id]);
        }
        return redirect('admin/posts');
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
            'post' => Posts::find($id)
        );
        return view('admin.posts.show')->with($data);
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
            'post' => Posts::find($id),
            'event' => Events::all()
        );
        return view('admin.posts.edit')->with($data);
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
        $form = Posts::find($id);
        $form->title = $request->post('title');
        $form->content = $request->post('content');
        $form->events_id = $request->post('event');
        $form->save();

        $photoid = $request->post('photoid');
        $files = $request->file('imagefile');
        $filesupdate = $request->file('file');
        if ($filesupdate)
            foreach ($filesupdate as $k => $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/blogs/', $imagename);
                Images::where('id', $photoid[$k])->update(['path' => 'images/blogs/' . $imagename, 'imageable_id' => $form->id]);
            }
        if ($files)
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/blogs/', $imagename);
                $form->Images()->create(['path' => 'images/blogs/' . $imagename, 'imageable_id' => $form->id]);
            }

        $videoid = $request->post('videoid');
        $file = $request->file('film');
        $filesupdate = $request->file('video');
        if ($filesupdate)
            foreach ($filesupdate as $k => $file) {
                $videoname = $file->getClientOriginalName();
                $file->move('images/blogs/', $videoname);
                Videos::where('id', $photoid[$k])->update(['source' => 'images/blogs/' . $videoname, 'title' => $videoname, 'width' => 100, 'height' => 100, 'videoable_id' => $form->id]);
            }
        if ($file) {
            $videoname = $file->getClientOriginalName();
            $file->move('images/blogs/', $videoname);
            $form->Videos()->create(['source' => 'images/blogs/' . $videoname, 'title' => $videoname, 'width' => 100, 'height' => 100, 'videoable_id' => $form->id]);
        }
        return redirect('admin/posts');
    }

    public function deletePostPhoto($id, $pid)
    {
        $image = Images::find($id);
        $image->delete();
        return redirect("editPost/$pid");
    }
    public function deletePostVideo($id, $pid)
    {
        $v = Videos::find($id);
        $v->delete();
        return redirect("editPost/$pid");
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
        $post = Posts::find($id);
        $post->delete();
        return redirect('/admin/posts');
    }
}
