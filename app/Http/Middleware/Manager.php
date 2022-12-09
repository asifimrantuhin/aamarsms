<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
{

    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::check() && Auth::user()->role==5) {
            return $next($request);

        }else{
            return redirect()->route('login');
        }

    }

}
