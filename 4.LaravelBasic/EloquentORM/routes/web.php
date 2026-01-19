<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/demo1',[DemoController::class, 'demo1']);
Route::get('/demo2',[DemoController::class, 'demo2']);
Route::get('/demo3',[DemoController::class, 'demo3']);
Route::get('/demo4',[DemoController::class, 'demo4']);
Route::get('/demo5',[DemoController::class, 'demo5']);
Route::get('/demo6',[DemoController::class, 'demo6']);
Route::get('/demo7',[DemoController::class, 'demo7']);
