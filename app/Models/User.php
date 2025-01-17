<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        "first_name",
        "last_name",
        "username",
        "email",
        "password",
        "role"
    ];

    protected $hidden = [
        'password',
        'role',
    ];
}
