<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOut extends Controller
{
    public function logOut(Request $request){

        if(Auth::check()){
        
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            
            return redirect()->route("login");
        }
        
    }
}
