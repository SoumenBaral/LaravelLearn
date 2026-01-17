<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Post;
Route::get('/', function () {
//    \App\Models\Category::factory()->create();

    $posts = Post::query()->get();
    return view('welcome',['Posts'=>$posts]);
});
