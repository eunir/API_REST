<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
    protected $fillable = [
        
        'comentar_voto',
        'alternativa',
        'id_usuario',
        'id_enquete',
        
    ];

    public function rules(){
        return[
        'comentar_voto' => '',
        'alternativa' => '',
        'id_usuario'=> '',
        'id_enquete' => '',
        
        ];
        
    }
}
