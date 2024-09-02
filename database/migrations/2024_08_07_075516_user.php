<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user',function (Blueprint $table){
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("username")->unique();
            $table->string("email")->unique();
            $table->string("password")->password();
            $table->string("role");
            $table->timestamps(); //създава 2 колони, които са created_at и updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("user");
    }
};
