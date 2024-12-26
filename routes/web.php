<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Auth/login', [UsersController::class, 'index'])->name('login');
Route::get('/Auth/signup', [UsersController::class, 'create'])->name('signup');
Route::post('/register', [UsersController::class, 'store'])->name('register.store');
