<?php

namespace App\Http\Controllers;

use App\Models\Shopcart;
use App\Models\Setting;
use Illuminate\Http\Request;
use Auth;
class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        view()->share('setting',Setting::first());

    }
    public static function shopcartcount()
    {
        $shopcart=Shopcart::where('user_id',Auth::id())->with('product')->get();
        
        return $shopcart->count();
    }

    public function index()
    {
        $shopcart=Shopcart::where('user_id',Auth::id())->with('product')->get();
        
        return view('shopcart',['shopcart'=>$shopcart]);
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
    public function store(Request $request,$id)
    {
       // 
        $data=Shopcart::where('product_id',$id)->first();
        
    
        if($data){
        
         $data->quantity=$request->quantity + $data->quantity;
        }
        
        
        else{
            $data=new Shopcart;
            $data->quantity=$request->quantity ;
            $data->product_id=$id;
            $data->user_id=Auth::id();
            $data->quantity=$request->quantity;

        }
       
        $data->save();
        return redirect()->back()->with('success','Başarıyla sepete eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shopcart $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shopcart=Shopcart::where('product_id',$id)->first();
        

        $shopcart->quantity=$request->quantity;
        $shopcart->save();
        return redirect()->back()->with('success','miktar güncellendi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shopcart=Shopcart::findOrFail($id);
        $shopcart->delete();
        return redirect()->back()->with('success','Başarıyla silindi');
    }
}
