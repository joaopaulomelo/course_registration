<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\KinshipType;
use App\Models\Nationality;
use App\Service\RegisterService;
use Illuminate\Http\Request;

class ResgisterController extends Controller
{
    private $registerService;

    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function register() {
        return view('register.register');
    }

    public function new(RegisterRequest $request) {

        $this->registerService->createUser($request);

        return redirect()->route('index.get')->with(['status' => 'Usuário cadastrado com sucesso!']);
    }

    public function info() {

        $nationality = Nationality::pluck('description', 'id');
        $kinshipType = KinshipType::pluck('description', 'id');

        return view('register.info', compact('nationality','kinshipType'));
    }

    public function newInfo(Request $request) {

        $this->registerService->createUserInfo($request);

        return redirect()->route('course.index')->with(['status' => 'Cadastro concluido com sucesso!']);
    }

}
