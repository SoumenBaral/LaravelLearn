<?php

use App\Http\Controllers\upLoadController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload',[upLoadController::class,'upload']);
Route::post('/upload',[upLoadController::class,'handleUpload'])->name('upload.handle');
Route::get('/gallery',[ImageController::class,'gallery']);
Route::post('/gallery',[ImageController::class,'store'])->name('gallery.store');