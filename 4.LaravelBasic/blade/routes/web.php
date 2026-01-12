<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo',[HomeController::class,'demo'] );

//Route::get('/contact',[HomeController::class,'contact'] );

Route::view('/demo-contact','home.demo-contact',['name'=>"Contact Me Please"]);

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/about',[HomeController::class,'about'])->name('home.about');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
