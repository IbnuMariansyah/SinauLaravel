<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect(route('home'));
        }
        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();

        return redirect(route('login'));
    }
}
