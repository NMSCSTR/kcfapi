<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'kcfapicode',
        'email',
        'phone_number',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
