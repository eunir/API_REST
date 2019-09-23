<?php

namespace App\Http\Controllers;

use App\Models\Enquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnquetesWebController extends Controller
{
    //Construtor
    public function __construct(Enquetes $enquete, Request $request)
    {
        $this->enquete = $enquete;
        $this->request = $request;
    }

    //Função inicial da página, acionada ao selecionar a opção enquetes
    public function index(){
        $funcionario = DB::table('funcionarios')
            ->where('ativo', '=', '1')
            ->get();
        return view('enquetes',compact('funcionario'));
    }

    //Função chamada para abrir nova enquete
    public function criarEnquete(Request $request){

        $this->validate($request,[
            '_token' => '',
            'descricao'=>'required',
        ],[
            'descricao.required'=>'A descrição é obrigatória!',
        ]);

        $dataForm = $request->all();
        DB::table('enquetes')->insert([
            'descricao_enquete' => $dataForm['descricao'],
            'data_abertura'=>$dataForm['data'],
            'responsavel'=>$dataForm['responsavel']
            ]);
        return redirect()->action('EnquetesWebController@index');
        //->with('sucesso','Nova enquete criada com sucesso!');
    }

    //chama a tela de detalhamento de enquetes
    public function votacao(){
        return view('votacao');
    }
}
