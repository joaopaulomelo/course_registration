<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($request->id_user)],
            'password' => 'required|max:11'
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'email.required' => 'Favor preencher o email',
        'email.unique' => 'Email informado ja cadastrado',
        'email.email' => 'Email invalido!',
        'password.required' => 'Favor preencher a senha',
        'password.max' => 'Favor preencher a senha ate 11 caracteres',
    ];
}

}
