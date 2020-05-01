<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Locations;
use App\Models\Salons;
use App\Models\Segments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class SalonsController extends Controller
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
        $salons = Salons::with('locations','segments')->get();
        return view('admin.salons.index')->with('salons', $salons);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'locations' => Locations::all()
        );
        return view('admin.salons.add')->with($data);
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
        ]);
        $salons = Salons::create([
            'name' => $request['name'],
            'locations_id' => $request['locations_id'],
        ]);

        return redirect("/createSegment/$salons->id");
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
            'salons' => Salons::find($id),
            'locations' => Locations::all()
        );
        return view('admin.salons.edit')->with($data);
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
        $form = Salons::find($id);
        $form->name = $request->post('name');
        $form->locations_id = $request->post('locations_id');
        $form->save();

        return redirect('admin/salons');
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $segments=array();
        $i=0;

        $salon= Salons::where('id','=',$id)->with('segments','locations')->get();
        $salon=$salon[0];
        $salon_name=$salon->name;

        foreach($salon->segments as $v){
            $segments[$v->orders]=$v;
        }
        ksort($segments);

        $location=$salon->locations;

        $alphabet = range('A', 'Z');

        $data = array(
            'salon_name' => $salon_name,
            'segments' => $segments,
            'location' => $location,
            'alphabet' => $alphabet,
            'salon_id' => $id
        );

        return view('admin.salons.show')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $post = Salons::find($id);
        $post->delete();
        return redirect('/admin/salons');
    }



}
