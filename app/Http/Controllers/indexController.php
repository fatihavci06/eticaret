<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Category;
use App\Models\Message;
use App\Models\Faq;
use App\Models\User;
use Auth;
use Validator;
class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getSetting(){
        $data=Setting::first();
        return $data;
    }
    public function __construct(){
        view()->share('setting',Setting::first());

    }
    public function index()
    {
         
        $daily=Product::select('id','title','image','price','slug','quantity')->limit(4)->inRandomOrder()->get();
        $last=Product::select('id','title','image','price','slug','quantity')->limit(4)->orderByDesc('id')->get();
        $picked=Product::select('id','title','image','price','slug','quantity')->limit(4)->inRandomOrder()->get();
      //  $slider=Product::where('image','!=','')->select('title','image','price')->limit(4)->get();
       
       $data=[
        'daily'=>$daily,
        'last'=>$last,
        'picked'=>$picked];
        return view('index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getproduct(Request $request)
    {
       $data=Product::where('title',$request->input('search'))->first();
       
    }
    public function addtocart($id)
    {
       
    }
    public function aboutus()
    {
        return view('aboutus');
    }
     public function references()
    {
        return view('references');
    }
    public function myuser()
    {
        return view('myuser');
    }
    public function faq()
    {
        $data=Faq::all()->sortBy('position');
        return view('faq',['faq'=>$data]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function product_list($sl,$slug='')
    {   
       
        if($slug!=''){
            $category=Category::select('id')->where('slug',$slug)->first();
             $product=Product::where('category_id',$category->id)->get();
             return view('category_product_list',['anakategori'=>0,'product'=>$product]);//anakategorideğişkeni blade gönderildi bu durumlara göre veri listelemesi yapıldı. Çünkü bir kategorye tıklandığında child kategorirlere ait ürünlerinde listelenmesi gerekli
        }
        else{
            $category=Category::select('id')->where('slug',$sl)->first();
             $cat=Category::with('child.products')->where('id',$category->id)->first();
            
             if(count($cat->child)==0){ //eğer child categ
                $product=Product::where('category_id',$category->id)->get();
                return view('category_product_list',['anakategori'=>1,'product'=>$product]);
             }
             return view('category_product_list',['anakategori'=>2,'product'=>$cat]);
           // return response()->json();
             
             
        }
       
        
        
        
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
    public function contactus(Request $request)
    {
        
        #create or update your data here
           $validator = \Validator::make($request->all(), [
             'name' => 'required',
             'message'=>'required'
                
            ]);
        if ($validator->fails())
         {
        return response()->json(['errors'=>$validator->errors()->all()]);
        }
    
        $message=new Message;
        $message->name=$request->name;
        $message->subject=$request->subject;
        $message->email=$request->email;
        $message->phone=$request->phone;
        $message->message=$request->message;
        $message->save();

        return response()->json(['success'=>'it is saved' ]);
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
    public function destroy($id)
    {
        //
    }
}
