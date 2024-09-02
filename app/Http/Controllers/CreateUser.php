<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateUser extends Controller
{
    public function CreateUser(Request $request){        
        
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|required'
        ]);


        $existingUser = User::where('username', $validatedData['username'])
                            ->orWhere('email', $validatedData['email'])
                            ->first()->get();


        if($existingUser){
            return redirect()->route("register")->with('error', 'Username or email already exists.');
        }

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => "user"
        ]);

        Auth::login($user);

        return redirect()->route("userDashboard");

    }
}


