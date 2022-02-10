<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Setting;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        view()->share('setting',Setting::first());

    }
    public function index()
    {
        $data=Order::where('user_id',Auth::id())->with('order_item')->get();
       //return response()->json($data);
        return view('user_order',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        return view('user_order_add',['total'=>$request->total]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order=new Order;
        $order->name=$request->name;
        $order->address=$request->address;
        $order->email=$request->email;
        $order->phone=$request->phone;
        $order->total=$request->total;
        $order->user_id=Auth::id();
        $order->ip=$_SERVER['REMOTE_ADDR'];
        $order->save();
        $datalist=Shopcart::where('user_id',Auth::id())->get();
        foreach($datalist as $d){
            $data2=new OrderItem;
            $data2->user_id=Auth::id();
            $data2->product_id=$d->product_id;
            $data2->order_id=$order->id;
            $data2->price=$d->product->price;
            $data2->quantity=$d->quantity;
            $data2->amount=$d->quantity* $d->product->price;
            $data2->save();


        }
        $Shopcartsil=Shopcart::where('user_id',Auth::id())->get();
        
        foreach($Shopcartsil as $s)
        {
            $s->delete();
        }
       
        return redirect()->route('home')->with('success','sipariş başarıyla oluşturuldu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=OrderItem::where('order_id',$id)->with('product')->get();
        //return response()->json($data);
        return view('user_order_show',['data'=>$data]);
        
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
    public function update(Request $request, Order $order)
    {
        //
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
}
