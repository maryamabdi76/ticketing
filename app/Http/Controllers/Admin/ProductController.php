<?php

namespace App\Http\Controllers\Admin;

// use App\User;
// use App\Models\Users;
use App\Models\Kala;
use App\Models\Images;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

class ProductController extends Controller
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
        $product = Kala::with('Category')->get();
        return view('admin.product.index')->with('product', $product);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'cat' => Category::all()
        );
        return view('admin.product.add')->with($data);
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
            'description' => 'required|string|max:255',
            // 'categoryid'=>'required|numeric|max:255',
            'price' => 'required|numeric',
            'num' => 'required|numeric|max:255',
        ]);
        $form = new Kala();
        $form->name = $request->post('name');
        $form->description = $request->post('description');
        $form->categoryid = $request->post('categoryid');
        $form->price = $request->post('price');
        $form->num = $request->post('num');
        $files = $request->file('imagefile');
        $form->save();
        foreach ($files as $file) {
            $imagename = $file->getClientOriginalName();
            $file->move('images/kala/', $imagename);
            $form->Images()->create(['path' => 'images/kala/' . $imagename, 'imageable_id' => $form->id]);
        }
        return redirect('admin/product');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
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
            'product' => Kala::find($id),
            'cat' => Category::all()
        );
        return view('admin.product.edit')->with($data);
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
        // dd($request->id);
        $id = $request->id;
        $form = Kala::find($id);
        $form->name = $request->post('name');
        $form->description = $request->post('description');
        $form->categoryid = $request->post('categoryid');
        $form->price = $request->post('price');
        $form->num = $request->post('num');
        $form->save();
        $photoid=$request->post('photoid');
        $files = $request->file('imagefile');
        $filesupdate = $request->file('file');
        if ($filesupdate)
        foreach ($filesupdate as $k=>$file) {
            // dd($photoid[$k]);
                $imagename = $file->getClientOriginalName();
                $file->move('images/kala/', $imagename);
                Images::where('id',$photoid[$k])->update(['path' => 'images/kala/' . $imagename, 'imageable_id' => $form->id]);
            }
        if ($files)
            foreach ($files as $file) {
                $imagename = $file->getClientOriginalName();
                $file->move('images/kala/', $imagename);
                $form->Images()->create(['path' => 'images/kala/' . $imagename, 'imageable_id' => $form->id]);
            }
        return redirect('admin/product');
    }

    public function deletePhoto($id, $pid)
    {
        $image = Images::find($id);
        $image->delete();
        return redirect("editProduct/$pid");
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
        $product = Kala::find($id);
        $product->delete();
        return redirect('/admin/product');
    }
}
