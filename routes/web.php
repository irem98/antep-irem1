<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [HomeController::class, 'users']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/users_product', [HomeController::class, 'users_product']);
