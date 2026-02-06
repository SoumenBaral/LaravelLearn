<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }
    public function store(Request $request){

        //1. Validate The Requested data (email should be unique)
        //2. Create a new user record in the database
        //3.1(Optional) Redirect to the login page
        //3.2(Optional)After a new user, we can authenticate the user automatically and Redirect to the Dashboard page.

        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        $user=User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => ($request->input('password')),
        ]);
        return redirect()->route('login');
    }
}
