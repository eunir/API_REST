<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquetes extends Model
{
    protected $fillable = [
        '_token',
        'descricao_enquete',
        'comentario',
        'data_abertura',
        'num_votos',
        'id_funcionario',

    ];

    public function rules(){
        return[
        'descricao_enquete' => 'required',
        'comentario' => '',
        'data_abertura'=> 'required',
        'num_votos' => '',
        'id_funcionario' => 'required',
        
        ];
        
    }
}
