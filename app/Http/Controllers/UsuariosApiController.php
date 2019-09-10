<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Models\Usuarios;
use App\Http\Requests\usuarioRequest;

class UsuariosApiControlLer extends Controller
{
    //Construtor
    public function __construct(Usuarios $usuario, Request $request)
    {
        $this->usuario = $usuario;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->usuario->all();
        return response()->json($data);
    }

    
    
    public function cadastrar(Request $request)
    {
        $this->validate($request, $this->usuario->rules());
        $dataForm = $request->all();
        $data = $this->usuario->insert($dataForm);
        return response()->json('Usuário cadastrado com sucesso');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
