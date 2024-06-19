<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(AuthLoginRequest $request)
    {
        $validated = $request->validated();
        
        if ($this->validated($validated)) {
            return [
                'message' => 'Usuário logado com sucesso!'
            ];
        }else
            return [
                'errors' => 'inválido',
                'message' => 'Usuário ou senha inválido',
            ];
    }

    private function validated($validated) {
        if ($validated['username'] == 'teste' && $validated['password'] == '123456') {
            return true;
        }
    }
}
