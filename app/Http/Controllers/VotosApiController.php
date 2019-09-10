<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Votos;
use phpDocumentor\Reflection\Types\Integer;

class VotosApiController extends Controller
{
    //Construtor
    public function __construct(Votos $votos, Request $request)
    {
        $this->votos = $votos;
        $this->request = $request;
    }
    
    //Adiconando votos
    public function votacao(Request $request){
        //$this->validate($request, $this->votos->rules());
        $dataForm = $request->all();
        
        if($dataForm['alternativa'] == 1){
            $dataForm['alternativa'] = "Sim";
        }
        if($dataForm['alternativa'] == 2){
            $dataForm['alternativa'] = "Nao";
        }
        DB::table('votos')->insert([
        'comentario_voto' => $dataForm['comentario_voto'],
        'alternativa'=>$dataForm['alternativa'],
        'id_usuario'=>$dataForm['id_usuario'],
        'id_enquete'=>$dataForm['id_enquete']
        ]);
        
        //Verifica alternativa e grava a quantia de votos na tabela enquetes
        if($dataForm['alternativa'] == "Sim"){
            DB::table('enquetes')->where(['id' => $dataForm['id_enquete']])->increment('num_votos_afavor', 1);
        }else{
            DB::table('enquetes')->where(['id' => $dataForm['id_enquete']])->increment('num_votos_contra', 1);
        }
        //Buscando votos
        
        //$v = $data['num_votos'];
        //$v = $v + 1;
        //Adicionando o voto na enquete
        //DB::table('enquetes')->where(['id' => $dataForm['id_enquete']])->update(['num_votos', '=', '+1']);
        //DB::table('enquetes')->where(['id' => $dataForm['id_enquete']])->increment('num_votos', 1);
        $data = DB::table('enquetes')->select('num_votos_afavor')->where('id', '=', $dataForm['id_enquete'])->get();
        //$data->sum($data + 1);
        return response()->json($data);
    }
}
