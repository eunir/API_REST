<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usuarioRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nome_usuario' => 'required',
            'endereco' => 'required',
            'cpf_usuario' => 'required',
            'email_usuario' => 'required|unique:usuarios',
            'cidade_usuario' => 'required',
            'nivel_acesso' => 'required',
            'usuario' => 'required',
            'senha' => 'required',
        ];
    }
}
