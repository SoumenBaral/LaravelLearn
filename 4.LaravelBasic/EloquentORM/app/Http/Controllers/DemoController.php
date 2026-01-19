<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo1(){
       $result= User::create([
            'name'=>'Shakib',
            'email'=>'Shakib.jnu@gmail.com',
            'password'=>bcrypt('123456'),
            'remember_token'=>'xyz123456',
            'email_verified_at'=>now()

        ]);
        return $result;

    }
    public function demo2(){
       $result= User::where('id',1)->update([
            'name'=>'Shumen',
            

        ]);
        return $result;

    }
    public function demo3(){
       $result= User::where('id',4)->delete();
        return $result;

    }
    public function demo4(){
        // return Customer::get();
        // return Customer::all();
        // return Customer::first();
        // return Customer::find(3);
        return Customer::pluck('name','email');



    }
    public function demo5(){
        //Aggregation count(),sum(),max(),min(),avg()
        // return Product::count();
        // return Product::sum('price');
        // return Product::max('price');
        // return Product::min('price');
        return Product::avg('price');

    }
    public function demo6(){
        //Simple paginate
        // return Product::paginate(2);
        //Quit not simple 
        return Product::paginate(
            $perPage=5,
            $columns=['*'],
            $pageName = 'product'
        );
    }
    public function demo7(){
        // Relationship
        // Has Relationship-> hasOne , HasMany (jokhon forien key pater baire  thake )
        // Belongs Relationship (jokhon forien key patter vittor thake  )
        return Product::with('categories','users')->get();
    }

}
