<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) { 
            return redirect()->intended('/my-orders');
        }

        return back()->withErrors([  
            'email' => 'Не верные учетные данные',
        ]);
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect('/login');
    }
}