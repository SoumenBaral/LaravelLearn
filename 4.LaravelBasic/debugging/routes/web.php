<?php

use App\Http\Controllers\demoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo1',[demoController::class,'demo1']);