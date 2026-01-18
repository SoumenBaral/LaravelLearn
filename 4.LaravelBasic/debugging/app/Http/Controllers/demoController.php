<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class demoController extends Controller
{
    public function demo1(){
        $x = 10;
        $y = 20;

        Log::info($y);
        return $x + $y;
    }
}
