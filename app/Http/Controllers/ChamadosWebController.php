<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadosWebController extends Controller
{
     //Construtor
     public function __construct(Chamados $chamado, Request $request)
     {
         $this->chamado = $chamado;
         $this->request = $request;
     }
 
     public function index()
     {
         $data = $this->chamado->all();
         return response()->json($data);
     }
 
     //Redireciona para a tela de chamados
     public function redireciona()
     { 
        $status = "aberto";
        $chamado = DB::table('chamados')
        ->where('status_chamado', '=', $status )
        ->get();
        
         return view('chamados',compact('chamado'));
     }

     //Faz a busca pelo STATUS e TIPO de chamado
     public function listarPorStatus(Request $request){
         $status = $request['status'];
         $tipo = $request['tipo'];
        
        if($status == 1){
            $status = "aberto";
            $chamado = DB::table('chamados')
            ->where('status_chamado', '=', $status, 'and','tipo_chamado','=', $tipo)
            ->get();
            return view('chamados',compact('chamado'));
        }
        if($status == 2){
            $status = "Em analise";
            $chamado = DB::table('chamados')
            ->where('status_chamado', '=', $status, 'and','tipo_chamado','=', $tipo)
            ->get();
            return view('chamados',compact('chamado'));
        }
        if($status == 3){
            $status = "Em andamento";
            $chamado = DB::table('chamados')
            ->where('status_chamado', '=', $status, 'and','tipo_chamado','=', $tipo)
            ->get();
            return view('chamados',compact('chamado'));
        }
        if($status == 4){
            $status = "Finalizado";
            $chamado = DB::table('chamados')
            ->where('status_chamado', '=', $status, 'and','tipo_chamado','=', $tipo)
            ->get();
            return view('chamados',compact('chamado'));
        }
     }

     //detaha o chamado quando acionado a opção detalhar
     public function detalharChamado(Request $request){
        return ('Detalhes');
     }
}
