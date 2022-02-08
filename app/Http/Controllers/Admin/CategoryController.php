<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public static function getParentsTree($parentid,$title){

        if($parentid==0){
            return $title;
        }
        
        $parent=Category::where('id',$parentid)->first();
        
        
        
        $title=$parent->title.' -> '.$title;
        return $title;
    }
    public function index()
    {
        //

        $data=Category::all();
      //  return response()->json($data);
        return view('admin.category',['categories'=>$data]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        
        if($request->input('parent_id')=="Seçiniz"){
            return redirect()->route('admin_category_add')->with('hata','parent seçiniz.');
        }
        $category= new Category;
        $category->parent_id=$request->input('parent_id');
        $category->title=$request->input('title');
        $category->keywords=$request->input('keywords');
        $category->description=$request->input('description');
        $category->slug=$request->input('slug');
        $category->status=$request->input('status');

        $category->save();
        return redirect()->route('admin_category_add')->with('success','Kategori başarıyla eklendi.');
    }
    public function add()
    {   
        $data=Category::all();
        return view('admin.category_add',['categories'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['categories_detay']=Category::findOrFail($id);
        $data['categories']=Category::all();
       

        return view('admin.category_update',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {

        $category= Category::findorFail($id);
        $category->parent_id=$request->input('parent_id');
        $category->title=$request->input('title');
        $category->keywords=$request->input('keywords');
        $category->description=$request->input('description');
        $category->slug=$request->input('slug');
        $category->status=$request->input('status');

        $category->save();
        return redirect()->route('admin_category_show',$id)->with('success','Kategori başarıyla düzenlendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Category::findOrFail($id);
        
        $kategori->delete();
        return redirect()->route('admin_category');
    }
}
