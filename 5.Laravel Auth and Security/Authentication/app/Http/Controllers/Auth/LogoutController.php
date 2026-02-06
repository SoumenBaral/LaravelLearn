<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request){
        // 1. log out the user
        auth()->logout();

        // 2. Invalidate the session
        $request->session()->invalidate();

        // 3. Regenerate the session
        $request->session()->regenerateToken();

        // 4. Redirect to login page
        return redirect('login');
    }
}
