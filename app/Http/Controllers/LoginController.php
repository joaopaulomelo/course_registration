<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:11'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if(Auth::user()->first_login == 0){
                return redirect()->route('info');
            }
            // Authentication passed...
            return redirect()->route('course.index');

        }else{

            return redirect()->back()->withErrors('Credenciais Inválidas');

        }

    }

    public function getLogout()
    {
        auth()->logout();

        return redirect()->route('login');

    }

}
