<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LogInController extends Controller
{
    public function loginHandler(Request $request){


        $validatedData = $request->validate([
            "email"=>"required|string|email",
            "password"=>"required|string|min:8"
        ]);

        if(Auth::attempt($validatedData)){

            $request->session()->regenerate();

            if(Auth::user()->role === "admin"){
                return redirect()->route("adminDashboard");
            }
            
            return redirect()->route("userDashboard");
            
        }


        return redirect()->route("login") ->with('error', 'Wrong password of email.');
    }
}



