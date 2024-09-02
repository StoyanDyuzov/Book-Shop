<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FindUser extends Controller
{
    public function findUser(Request $request){

        $validatedData = $request->validate([
            "email"=>"required|string|email|max:255"
        ]);

        $foundUser = User::where("email",$validatedData["email"])->first();

        if($foundUser){
            return redirect()->route("adminFindUser")->with("user",$foundUser);
        }else{
            return redirect()->route("adminFindUser")->with("error", "There is no such a User");
        }
        
    }
}
