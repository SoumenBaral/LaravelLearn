<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function show(){
        return view('dashboard');
    }
}
