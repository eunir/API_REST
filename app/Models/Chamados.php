<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    protected $fillable = [
        
        'tipo_chamado',
        'status_chamado',
        'descricao',
        'imagem_video',
        'resposta',
        'data_abertura',
        'longitude',
        'latitude',
        'id_usuario',
        'id_funcionario',

    ];

    public function rules(){
        return[
        'tipo_chamado' => 'required',
        'status_chamado' => '',
        'descricao'=> '',
        'imagem_video' => '',
        'resposta' => '',
        'data_abertura' => '',
        'longitude' => '',
        'latitude' => '',
        'id_usuario' => '',
        'id_funcionario' => '',
        ];
        
    }
}
