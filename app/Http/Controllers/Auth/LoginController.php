<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Log;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

   
    public function __construct()
    {
        //  $this->middleware('auth')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1,
        ];
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function redirectTo()
    {

        $user = Auth::user()->name;
        Log::addToLog("$user has New Login Session");

        if (auth()->user()->role == 1) {
            return route('admin.dashboard');

        }
        elseif (auth()->user()->role == 2) {
            return route('reseller.dashboard');
        }
        elseif (auth()->user()->role == 3) {
            return route('user.dashboard');
        }
        elseif (auth()->user()->role == 4) {
            return route('sales.dashboard');
        }
        elseif (auth()->user()->role == 5) {
            return route('manager.dashboard');
        }
        
    }
}
