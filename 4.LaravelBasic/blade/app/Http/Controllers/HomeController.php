<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $skills = ['PHP','Laravel','JavaScript','VueJS','HTML','CSS'];
//        return view('home.index',['skills'=>$skills]);
          return view('home.index',compact('skills'));
    }

    function demo(Request $request)
    {
        $context = [
            'name'=>"Soumen",
            'age'=>30,
            'city'=>"Kolkata",
            'planets'=>['Earth','Mars','Jupiter','Saturn','Jupiter']
        ];
        return view('home.demo',$context); // ['name'=>"Soumen",'age'=>30] this is Called Context Data.
    }
    function contact(Request $request)
    {
        $address =[
            'street'=>"123 Main St",
            'city'=>"Kolkata",
            'state'=>"WB",
            'zip'=>"700001"
        ];
        return view('home.contact',['address'=>$address]);
    }
    function about(Request $request)
    {
        return view('home.about');
    }
}
