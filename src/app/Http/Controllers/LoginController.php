<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $request){
        $credencial = [
            'email' => $request->email,
            'password' => $request->senha,
        ];
        if (Auth::guard('cliente')->attempt($credencial)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors(['email' => 'Email ou senha incorretos']);
    }
    function logout(Request $request){
        Auth::guard('cliente')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
