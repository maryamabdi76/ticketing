<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Locations;
use App\Models\Salons;
use App\Models\Segments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class SegmentController extends Controller
{

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'segment' => Segments::find($id)
        );
        return view('admin.segments.edit')->with($data);
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
        $form = Segments::find($id);
        $form->name = $request->post('name');
        $form->row = $request->post('row');
        $form->seat = $request->post('seat');
        $form->capicity = $request->post('capicity');
        $form->orders = $request->post('orders');
        $form->price = $request->post('price');
        $form->save();

        return redirect('admin/salons');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = array(
            'salon_id' => $id
        );
        return view('admin.segments.add')->with($data);
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
            'name' => 'string|max:100',
            'row' => 'required|string|max:10',
            'seat' => 'required|string|max:10',
            'capicity' => 'required|string|max:20',
            'orders' => 'required|string|max:5',
            'price' => 'required|string|max:10',
        ]);
        $segments = Segments::create([
            'name' => $request['name'],
            'row' => $request['row'],
            'seat' => $request['seat'],
            'capicity' => $request['capicity'],
            'orders' => $request['orders'],
            'price' => $request['price'],
        ]);
        $id = $request->id;
        $salons=Salons::find($id);
        $segments->salons()->attach($salons->id);

        return redirect("/showSalons/$id");
    }


        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $post = Segments::find($id);
        $post->delete();
        return redirect('/admin/salons');
    }

}
