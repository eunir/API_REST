<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamados;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\File;

class ChamadosApiController extends Controller
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

    
    public function novoChamado(Request $request)
    {
        //$this->validate($request, $this->chamado->rules());
        $dataForm = $request->all();
        if($request->hasFile('imagem_video') && $request->file('imagem_video')->isValid()){
            $file = $dataForm['imagem_video'];
            $extensao = $request->imagem_video->extension();
            $name = uniqid(date('His'));
            $nomeArquivo = "{$name}.{$extensao}";
            $path = storage_path("app/public/imagens/");
            $file->move($path, $nomeArquivo);
            $dataForm['imagem_video'] = $nomeArquivo;
            
        }
        $data = $this->chamado->insert($dataForm);
        return response()->json($data);
    }
    
    //Realiza a busca dos chamados pelo id usuario
    public function listarChamado($id_usuario)
    {
        //$data = $this->chamado->find($id_usuario);
        if(is_null($id_usuario))
        {
            return false;
        }else{
            $data = DB::table('chamados')
                ->where('id_usuario', '=', $id_usuario )
                ->get();
        return response()->json($data);
        }
        
    }
    
    //Listar chamado pelo status
    public function listarChamadoStatus($status)
    {
        //$data = $this->chamado->find($id_usuario);
        if(is_null($status))
        {
            return false;
        }else{

            if($status == 1){
                $status = "aberto";
                $data = DB::table('chamados')
                ->where('status_chamado', '=', $status )
                ->get();
                return response()->json($data);
            }
            if($status == 2){
                $status = "Em analise";
                $data = DB::table('chamados')
                ->where('status_chamado', '=', $status )
                ->get();
                return response()->json($data);
            }
            if($status == 3){
                $status = "Em andamento";
                $data = DB::table('chamados')
                ->where('status_chamado', '=', $status )
                ->get();
                return response()->json($data);
            }
            if($status == 4){
                $status = "Finalizado";
                $data = DB::table('chamados')
                ->where('status_chamado', '=', $status )
                ->get();
                return response()->json($data);
            }
            
        }
        
    }
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        //
    }
}
