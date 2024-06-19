<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthLoginRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required|min:6'
        ];
    }
    
    public function messages(){
        
        return[
            'username.required' => 'O campo nome é obrigatório.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha tem que conter no mininimo 6 carecteres.',
        ];
    }
}
