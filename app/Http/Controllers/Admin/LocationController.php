<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Locations;
use App\Models\Salons;
use App\Models\Segments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class LocationController extends Controller
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
        $locations = Locations::all();
        return view('admin.locations.index')->with('locations', $locations);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.locations.add');
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
            'name' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'address' => 'required|string',
        ]);
        $locations = Locations::create([
            'name' => $request['name'],
            'province' => $request['province'],
            'city' => $request['city'],
            'address' => $request['address'],
        ]);

        return redirect('admin/locations');
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
            'locations' => Locations::find($id)
        );
        return view('admin.locations.edit')->with($data);
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
        $form = Locations::find($id);
        $form->name = $request->post('name');
        $form->province = $request->post('province');
        $form->city = $request->post('city');
        $form->address = $request->post('address');
        $form->save();

        return redirect('admin/locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $post = Locations::find($id);
        $post->delete();
        return redirect('/admin/locations');
    }
}
