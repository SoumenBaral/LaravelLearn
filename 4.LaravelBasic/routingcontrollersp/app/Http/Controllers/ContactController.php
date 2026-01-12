<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller
{
    public function  show(){
        return view('contact');
    }
    public function  store(Request $request)
    {
        // Process form data here
        Log::info('Form submitted'.json_encode($request->all()));
        // Save to Contact DataBase
        //Send Email Notification

        // For demonstration, we'll just return the data as JSON
        return redirect('/contact');
    }
}
