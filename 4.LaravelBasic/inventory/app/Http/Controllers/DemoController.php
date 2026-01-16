<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function demo1(){
        // return DB::table('products')->get();
//        return DB::table('products')->find(5);
//        return DB::table('products')->pluck('name');
//        return DB::table('products')->count();
//        return DB::table('products')->min('price');
//        return DB::table('products')->max('price');
//        return DB::table('products')->avg('price');
//        return DB::table('products')->sum('price');
//        return DB::table('products')->select('name','price','description')->get();
            // return DB::table('products')->select('name','price')->distinct()->get();
        
            // $q1 = DB::table('products')->where('price','>',50);
            // $q2 = DB::table('products')->where('tax','<',5);
            // $join = $q1->union($q2)->get();
            // return $join;
            
            // return DB::table('products')->orderBy('price','desc')->get();
            // return DB::table('products')->orderBy('price','asc')->get();
            // return DB::table('products')->latest()->get();
            // return DB::table('products')->latest()->first();
            // return DB::table('products')->oldest()->get();

            //-----------
            // return DB::table('products')->limit(3)->get();
            // return DB::table('products')->inRandomOrder()->get();
            // return DB::table('products')->skip(10)->take(10)->get();

            //  Pagination
            //-------------------

            // return DB::table('products')->simplePaginate(4);
            // return DB::table('products')->paginate(
            //     $perPage =5,
            //     $columns =['*'],//['name','price']],
            //     $pageName ='products'

            // );

            // return DB::table('products')->join('categories','products.category_id','categories.id')->get(); //
            // return DB::table('products')->leftJoin('categories','products.category_id','categories.id')->get();
             return DB::table('products')->rightJoin('categories','products.category_id','categories.id')->get();


        



        


 

    }

}
