<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Faq::all();
        return view('admin.faq',['faq'=>$datalist]);
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
        return view('admin.faq_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq= new Faq;
        $request->validate([
        'question'=>'required',
        'answer'=>'required',
         'position'=>'required',
         'status'=>'required'   
       ]);
        $faq->position=$request->input('position');
        $faq->question=$request->input('question');
        $faq->answer=$request->input('answer');
        $faq->status=$request->input('status');

        $faq->save();
        return redirect()->route('admin_faq_add')->with('success','Ürün başarıyla eklendi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq=Faq::findOrFail($id);
        return view('admin.faq_show',['faq'=>$faq]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $faq= Faq::findOrFail($id);
        $request->validate([
        'question'=>'required',
        'answer'=>'required',
         'position'=>'required',
         'status'=>'required'   
       ]);
        $faq->position=$request->input('position');
        $faq->question=$request->input('question');
        $faq->answer=$request->input('answer');
        $faq->status=$request->input('status');

        $faq->save();
        return redirect()->back()->with('success','Ürün başarıyla düzenlendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq=Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin_faq')->with('success','Successfly deleted');
    }
}
