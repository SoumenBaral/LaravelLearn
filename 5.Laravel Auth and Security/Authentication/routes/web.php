<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashbordController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('register',[RegisterController::class,'show'])
    ->middleware('guest');
Route::POST('register',[RegisterController::class,'store'])
    ->name('register');
Route::get('login',[LoginController::class,'show'])
    ->name('login')->middleware('guest');
Route::POST('login',[LoginController::class,'store'])
    ->name('login');
Route::get('dashboard',[DashbordController::class,'show'])
    ->name('dashboard');
