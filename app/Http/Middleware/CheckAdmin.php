<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userRoles=User::where('id',Auth::user()->id)->with('role_user.roles_name')->first();
        
         $admin=0;
         foreach($userRoles->role_user as $role){
           
            foreach($role->roles_name as $r){
                if($r->name=="admin"){
                    $admin=1;
                }
            }
         }
         if($admin!=1){
                 return redirect(route('admin.login'))->with('error','You do not have permission');
             }     
        return $next($request);
    }
}
