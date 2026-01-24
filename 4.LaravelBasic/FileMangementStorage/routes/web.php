<?php

use App\Http\Controllers\upLoadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload',[upLoadController::class,'upload']);
Route::post('/upload',[upLoadController::class,'handleUpload'])->name('upload.handle');