<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard' , ['title' => 'Dashboard']);
});

Route::get('/product', function () {
    return view('product' , ['title' => 'product']);
});
