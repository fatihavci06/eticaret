<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
class SettingController extends Controller
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
    public function edit()
    {
        $data=Setting::first();
        return view('admin.settings',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting=Setting::findOrFail($request->id);
        $setting->title=$request->title;
        $setting->keywords=$request->keywords;
        $setting->description=$request->description;
        $setting->company=$request->company;
        $setting->address=$request->address;
        $setting->phone=$request->phone;
        $setting->fax=$request->fax;
        $setting->email=$request->email;
        $setting->smtpserver=$request->smtpserver;
        $setting->smtpemail=$request->smtpemail;
        $setting->smtppassword=$request->smtppassword;
        $setting->setpport=$request->setpport;
        $setting->facebook=$request->facebook;
        $setting->youtube=$request->youtube;
        $setting->instagram=$request->instagram;
        $setting->twitter=$request->twitter;
        $setting->contact=$request->contact;
        $setting->references=$request->references;
        $setting->aboutus=$request->aboutus;
        $setting->status=$request->status;
        $setting->save();



        return redirect()->route('admin_settings_edit')->with('success','Ayarlar Kaydedildi...');


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
