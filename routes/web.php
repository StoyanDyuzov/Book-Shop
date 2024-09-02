<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Controllers\CreateUser;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LogOut;
use App\Http\Controllers\AccountDetails;
use App\Http\Controllers\UserOrdersHistory;
use App\Http\Controllers\CreateAdmin;
use App\Http\Controllers\FindUser;
use App\Http\Controllers\CreateBook;
use App\Http\Controllers\FindOrder;
use App\Http\Controllers\BuyBook;

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get("/login", function(){
    return view("login");
})->name("login");


Route::post("/login", [LogInController::class, "loginHandler"])->name("loginSubmit");


Route::get("/register", function(){
    return view("register");
})->name("register");

Route::post("/register",[CreateUser::class, "CreateUser"])->name("registerSubmit");

Route::post("/logout",[LogOut::class,"logOut"])->name("logout");


Route::middleware(AuthMiddleware::class)->group(function(){

    Route::get("/buyRandomBook",function(){
        return view("userBuyRandomBook");
    })->name("buyRandomBook");

    Route::get("buyRandomBookPurchase",[BuyBook::class, "buyBook"])->name("buyRandomBookPurchase");

    Route::get("/ordersHistory",[UserOrdersHistory::class,"ordersHistory"])->name("ordersHistory");

    Route::get("/accountDetails",[AccountDetails::class,"displayDetails"])->name("accountDetails");

    Route::get("/dashboard",function(){
        return view("userDashboard");
    })->name("userDashboard");

});


Route::middleware(AdminAuthMiddleware::class)->group(function(){
    
    Route::get("/adminDashboard",function(){
        return view("adminDashboard");
    })->name("adminDashboard");

    Route::get("/adminDashboard/createUser", function(){
        return view("adminCreateUser");
    })->name("adminCreateUser");
        
    Route::get("/adminDashboard/createBook",function(){
        return view("adminCreateBook");
    })->name("adminCreateBook");

    Route::get("/adminDashboard/findUser",function(){
        return view("adminFindUser");
    })->name("adminFindUser");

    Route::get("/adminDashboard/findOrder",function(){
        return view("adminFindOrder");
    })->name("adminFindOrder");
    

    Route::post("/adminDashboard/findOrder",[FindOrder::class,"findOrder"])->name("adminFindOrderSubmit");


    Route::post("adminDashboard/createUsers",[CreateAdmin::class,"createAdmin"])->name("adminCreateUserSubmit");

    Route::post("adminDashboard/findUser",[FindUser::class,"findUser"])->name("adminFindUserSubmit");

    Route::post("adminDashboard/createUser",[CreateBook::class,"createBook"])->name("adminCreateBookSubmit");

});