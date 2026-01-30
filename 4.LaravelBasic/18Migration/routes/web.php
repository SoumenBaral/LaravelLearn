<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use \App\Models\Post;
use \App\Models\Category;
Route::get('/', function () {
//    \App\Models\Category::factory()->create();

    $posts = Post::query()->get();
    return view('welcome',['Posts'=>$posts]);
});

Route::get('/categories', function () {
    $categories = Category::with('posts')->get();
    return $categories;
});

Route::get('/categories/{category}', function ($category) {

    try{
        $CategoryData = Category::query()
            ->where('id','=',$category)
            ->orWhere('name','=',$category)
            ->firstOrFail();


        return $CategoryData;
    }
    catch(Exception $e){
        dd($e);
    }


});
//Route::resource('posts', PostController::class);
