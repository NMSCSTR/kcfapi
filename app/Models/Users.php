<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    
    protected $fillable = [
        'firstname',
        'lastname',
        'kcfapicode',
        'email',
        'phone_number',
        'role',
        'password'
    ];
}
