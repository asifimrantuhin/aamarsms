<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Reseller
{

    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::check() && Auth::user()->role==2) {
            return $next($request);

        }else{
            return redirect()->route('login');
        }
    }

}
