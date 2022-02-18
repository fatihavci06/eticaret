<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status)
    {
       
        $datalist=Order::where('status',$status)->with('order_item')->with('user')->get();
       // return response()->json($datalist);
        return view('admin.order',['datalist'=>$datalist]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Order::findOrFail($id)->with('user')->first();
        $datalist=OrderItem::where('order_id',$id)->with('product')->get();
      // return response()->json($datalist);
        return view('admin.order_show',['datalist'=>$datalist,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=Order::findOrFail($id);
        $data->note=$request->note;
        $data->status=$request->status;
        $data->save();
        return redirect()->back()->with('success','güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public function item_update(Request $request,$id)
    {
        $data=OrderItem::findOrFail($id);
        $data->status=$request->status;
        $data->note=$request->note;
        $data->save();
        return redirect()->back()->with('success','güncellendi');
    }
}
