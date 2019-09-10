<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    
    protected $fillable = [
        
        'nome_usuario',
        'endereco',
        'cpf_usuario',
        'email_usuario',
        'cidade_usuario',
        'nivel_acesso',
        'usuario',
        'senha',

    ];

    public function rules(){
        return[
            'nome_usuario' => 'required',
            'endereco' => 'required',
            'cpf_usuario' => 'required|unique:usuarios',
            'email_usuario' => 'required|unique:usuarios',
            'cidade_usuario' => 'required',
            'nivel_acesso' => 'required',
            'usuario' => 'required',
            'senha' => 'required',
        ];
        
    }
   
}
