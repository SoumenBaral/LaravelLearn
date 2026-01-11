<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\post;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Route:post('/submit-form', function (Request $request) {
//    var_dump($request->all());
//});
Route::post('/submit-form', function (Request $request) {
    // Process form data here
    Log::info('Form submitted'.json_encode($request->all()));
    // Save to Contact DataBase
    //Send Email Notification

    // For demonstration, we'll just return the data as JSON
    return redirect('/contact');
})->name('submit-form');

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
