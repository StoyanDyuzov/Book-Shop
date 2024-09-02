<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountDetails extends Controller
{
    public function displayDetails(Request $request){

        $user = Auth::user();
        return view("userAccountDetails")->with("user",$user);
    }
}
