<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashbordController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('register',[RegisterController::class,'show']);
Route::get('login',[LoginController::class,'show']);
Route::get('dashboard',[DashbordController::class,'show']);
