<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = [
        '_token',
        'nome_funcionario',
        'cargo',
        'email',
        'senha',
        'confirmarSenha',
        'ativo',

    ];
    
}
