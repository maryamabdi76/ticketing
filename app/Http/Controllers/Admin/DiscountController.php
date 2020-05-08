<?php

namespace App\Http\Controllers\Admin;

// use App\User;
use App\Models\Genres;
use App\Http\Controllers\Controller;
use App\Models\Discounts;
use Illuminate\Http\Request;
use Verta;

class DiscountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discounts::all();
        foreach($discounts as $v){
            $dex = intval($v->expire_date);
            $expire_date = Verta::createTimestamp($dex);
            $v->expire_date = $expire_date;
        }
        return view('admin.discounts.index')->with('discount',$discounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.discounts.add');
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
            'code'=>'required|string|max:255',
            'value'=>'required|string|max:255',
            'expire_date'=>'required|string|max:255'
        ]);
        $v = Verta::parse($request->post('expire_date'));
        $t = $v->timestamp;
        $form=new Discounts();
        $form->code=$request->post('code');
        $form->value=$request->post('value');
        $form->expire_date= $t;
        $form->save();
        return redirect('admin/discounts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount = Discounts::find($id);
        $dex = intval($discount->expire_date);
        $expire_date = Verta::createTimestamp($dex);
        $discount->expire_date = $expire_date;
        return view('admin.discounts.edit')->with('discount',$discount);
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
        $v = Verta::parse($request->post('expire_date'));
        $t = $v->timestamp;
        $id=$request->id;
        $form=Discounts::find($id);
        $form->code=$request->post('code');
        $form->value=$request->post('value');
        $form->expire_date=$t;
        $form->save();
        return redirect('admin/discounts');
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
        $discounts = Discounts::find($id);
        $discounts->delete();
        return redirect('/admin/discounts');
    }
}
