<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware 
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            // check auth user role (I don't know how you can implement this for yourself, this is just for me)
            if(Auth::user()->role == 'admin'){
                return $next($request);
            } else {
                return redirect()->route('dashboard'); // for admins
            }
        }

        return redirect()->route('login'); // for users
    }
}
