<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Vlogin'); //return the login form view
    }

    public function login(Request $request)
    {
        return redirect()->intended('/berita');
    }
}
