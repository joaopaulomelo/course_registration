<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function new(RegisterRequest $registerRequest){

        $registerRequest->password = Hash::make($registerRequest->password);

        User::create(['email' => $registerRequest->email,'password' => $registerRequest->password]);

        return redirect()->route('home')->with(['message' => 'Usuário cadastrado com sucesso!']);
    }
}
