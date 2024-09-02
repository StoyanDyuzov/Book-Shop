<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;


class BuyBook extends Controller
{
    public function buyBook(){

        $user_id = Auth::user()->id;
        $all_books = Books::all();
        $random_book = $all_books->random();

        $order = Orders::create([
            "user_id" => $user_id,
            "book_id" => $random_book->id,
            "amount" => 3,
            "status" => "confirmed"
        ]);
       
        return redirect()->route('ordersHistory');
    }
}
