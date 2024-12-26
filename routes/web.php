<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Auth/login', function () {
    return view('Auth.login');
})->name('login');

Route::get('/Auth/signup', function () {
    return view('Auth.signup');
})->name('signup');
