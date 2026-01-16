<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function demo1(){
        return DB::table('products')->get();
//        return DB::table('products')->find(5);
//        return DB::table('products')->pluck('name');
//        return DB::table('products')->count();
//        return DB::table('products')->min('price');
//        return DB::table('products')->max('price');
//        return DB::table('products')->avg('price');
//        return DB::table('products')->sum('price');


    }

}
