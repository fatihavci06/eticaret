<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role_user;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::with('role_user.roles_name')->get();
        return view('admin.users',['datalist'=>$user]);
        //return response()->json($user);
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
        $roles=Roles::all();
        $role_user=Role_user::where('user_id',$id)->get();
        //return response()->json($role_user);
        return view('admin.user_update',['user'=>$user,'roles'=>$roles,'role_user'=>$role_user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
        'role'=>'required',
        'name'=>'required',
         'email'=>'required',
         'phone'=>'required',
         'address'=>'required'

       ]);
        
        $kullanicininyetkileri=Role_user::where('user_id',$id)->get();
       
       
        foreach($kullanicininyetkileri as $k){
           
           $k->delete();

        }
       
        foreach($request->role as $r){
            $yetkivarmi=Role_user::where('user_id',$id)->where('role_id',$r)->count();
            if($yetkivarmi>0){
                continue;
            }
            elseif($yetkivarmi==0){
                $yetkikayit=new Role_user;
                $yetkikayit->user_id=$id;
                $yetkikayit->role_id=$r;
                $yetkikayit->save();
                
            }
        }
        
        
        $user= User::findOrFail($id);
        
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        $user->address=$request->input('address');
        
        if(!empty($request->file('image'))){
            $user->profile_photo_path=Storage::putFile('images', $request->file('image'));
            
        }
        $user->save();
        return redirect()->back()->with('success','kullanıcı başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
         return redirect()->back()->with('success','kullanıcı başarıyla silindi');
    }
}
