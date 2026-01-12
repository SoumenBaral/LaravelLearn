<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use function Pest\Laravel\post;

Route::get('/',[HomeController::class,'show'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', [ContactController::class,'show'])->name('contact');


Route::post('/submit-form', [ContactController::class,'store'])->name('submit-form');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog/{slug}', function ($slug) {
    return view('blog-post', [
        'slug' => $slug,
        'title' => 'Blog Post Title for '. $slug,
        'content' => 'This is the content of the blog post with : ' . $slug,

    ]);
});

Route::get('/hello', function (Request $request) {
    return view('hello',[
        'greeting' => $request->get('greeting','World')
    ]);
});


//Route and Controller Reation

//Route::HttpMethodName('URI', [ControllerClass::class, 'method'])->name('route-name');
// Httlp Methods: get, post, put, patch, delete, options

// 404 Page
Route::fallback(function(){
    return view('error');
});
