<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        $data=Product::findOrFail($product_id);
        $images=Image::where('product_id',$product_id)->where(function($query){
            $query->where('image','!=','');
        })->get();
        
        return view('admin.image_add',['data'=>$data,'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$product_id)
    {
        $image= new Image;
        $request->validate([
        'title'=>'required',
           
       ]);
        
        $image->title=$request->input('title');
        $image->product_id=$product_id;
        $image->image=Storage::putFile('images', $request->file('image'));
        $image->save();
        return redirect()->route('admin_image_create',$product_id)->with('success','Resim başarıyla eklendi.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$product_id)
    {
        //
        $image = Image::findOrFail($id);
        
        $image->delete();
        return redirect()->route('admin_image_create',['product_id'=>$product_id]);
    }
}
