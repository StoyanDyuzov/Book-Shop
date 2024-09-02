<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders;


class UserOrdersHistory extends Controller
{
    public function ordersHistory(Request $request){

        $user_id = Auth::user()->id;
        $user_orders = Orders::where("user_id",$user_id)->get();


        
        if($user_orders->count() > 0){
            return view('userOrderHistory')->with("orders",$user_orders);
        }
        
        return view('userOrderHistory')->with("error","there is no orders"); 
    }
}
