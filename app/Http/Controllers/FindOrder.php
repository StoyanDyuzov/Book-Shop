<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class FindOrder extends Controller
{

    public function findOrder(Request $request){
        $validatedData = $request->validate([
            "user_id"=>"required|string|max:5"
        ]);

        $user_id = (int) $validatedData["user_id"];

        $user_orders = Orders::where("user_id",$user_id)->get();

        if($user_orders->count() > 0){
            return view("adminFindOrder")->with("orders",$user_orders);
        }
        return view("adminFindOrder")->with("error","User dont have orders!");

    }
    
}
