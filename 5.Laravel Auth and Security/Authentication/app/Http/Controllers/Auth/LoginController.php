<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function show()
    {
        return view('auth.login');
    }
    public function store(Request $request){
        //1. Validate The Requested data (email should be unique)
        //2. Authenticate the user
        //3. Redirect to the Dashboard page
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required'
        ]);
        $user = User::where('email',$request->email)->first();
        if(!$user || !\Hash::check($request->password,$user->password)){
            return back()->withErrors(['email'=>'The provided credentials are incorrect']);
        }
        Auth::login($user,$request->boolean('remember'));
        return redirect()->route('dashboard');

    }
}
