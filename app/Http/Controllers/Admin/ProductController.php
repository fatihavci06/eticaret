<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        return view('admin.product',['products'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     public function add()
    {
        $data=Category::get();
        return view('admin.product_add',['categories'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new Product;
        $request->validate([
        'title'=>'required',
        'quantity'=>'required',
         'minquantity'=>'required',
         'tax'=>'required'   
       ]);
        if($request->input('category_id')=="Seçiniz"){
            return redirect()->route('admin_product_add')->with('hata','Kategori seçiniz.');
        }
        $product->title=$request->input('title');
        $product->keywords=$request->input('keywords');
        $product->description=$request->input('description');
        $product->category_id=$request->input('category_id');
        $product->slug=$request->input('slug');
        $product->image=Storage::putFile('images', $request->file('image'));
        $product->status=$request->input('status');
        $product->user_id=Auth::id();
        $product->price=$request->input('price');
        $product->quantity=$request->input('quantity');
        $product->minquantity=$request->input('minquantity');
        $product->tax=$request->input('tax');
        $product->detail=$request->input('detail');

        $product->save();
        return redirect()->route('admin_product_add')->with('success','Ürün başarıyla eklendi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['categories']=Category::all();
        $data['product']=Product::findOrFail($id);
       

        return view('admin.product_update',$data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate([
        'title'=>'required',
        'quantity'=>'required',
         'minquantity'=>'required',
         'tax'=>'required'   
       ]);
        $product= Product::findOrFail($id);
        if($request->input('category_id')=="Seçiniz"){
            return redirect()->route('admin_product_add')->with('hata','Kategori seçiniz.');
        }
        $product->title=$request->input('title');
        $product->keywords=$request->input('keywords');
        $product->description=$request->input('description');
        $product->category_id=$request->input('category_id');
        $product->slug=$request->input('slug');
        $product->image=Storage::putFile('images', $request->file('image'));
        $product->status=$request->input('status');
        $product->user_id=Auth::id();
        $product->price=$request->input('price');
        $product->quantity=$request->input('quantity');
        $product->minquantity=$request->input('minquantity');
        $product->tax=$request->input('tax');
        $product->detail=$request->input('detail');

        $product->save();
        return redirect()->route('admin_product_show',$product->id)->with('success','Ürün başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        $product->delete();
        return redirect()->route('admin_products');
    }
}
