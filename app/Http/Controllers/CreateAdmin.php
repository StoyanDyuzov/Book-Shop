<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CreateAdmin extends Controller
{
    public function createAdmin(Request $request){

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|required',
        ]);

        $existingAdmin = User::where("email",$validatedData["email"])->orWhere("username",$validatedData["username"])->first();

        if($existingAdmin){
            return redirect()->route("adminCreateUser")->with("error","This Admin already exist!");
        }

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => "admin"
        ]);

        return redirect()->route("adminCreateUser")->with("error","Admin created successfully!");
    }
}
