<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
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
        if(!Auth::check()){
            return redirect('/login');
        }
        $user = Auth::user();
        if($user->role == 1){
            return $next($request);
        }

        if($user->role == 2){
            return redirect('/admin');
        }

        if($user->role == 3){
            return redirect('/depthead');
        }

        if($user->role == 4){
            return redirect('/staff');
        }
        
        if($user->role == 5){
            return redirect('/client');
        }
 
    }
}
