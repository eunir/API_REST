<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionariosWebController extends Controller
{
    //Construtor
    public function __construct(Funcionarios $funcionario, Request $request)
    {
        $this->funcionario = $funcionario;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->funcionario->all();
        return response()->json($data);
    }

    public function redireciona()
    {
        return view('cadastro');
    }

    public function cadastrar(Request $request)
    {
        
        $this->validate($request, [
            '_token' => '',
            'nome' => 'required',
            'cargo' => 'required',
            'email' => 'required|email|unique:funcionarios',
            'senha' => 'required|unique:funcionarios',
            'confirmarSenha' => 'required'
        ], [
            'nome.required'=>'O nome é obrigatório!',
            'cargo.required'=>'Cargo é obrigatório!',
            'email.required'=>'Email é obrigatório!',
            'email.unique'=>'Email já cadastrado!',
            'senha.required'=>'A senha é obrigatória!',
            'senha.unique'=> 'Senha já cadastrada',
            'confirmarSenha.required'=>'Confirme sua senha',
        ]);
        $dataForm = $request->all();
        $dataForm['ativo'] = 1;
        DB::table('funcionarios')->insert([
            'nome_funcionario' => $dataForm['nome'],
            'cargo'=>$dataForm['cargo'],
            'email'=>$dataForm['email'],
            'senha'=>$dataForm['senha'],
            'ativo'=>$dataForm['ativo']
            ]);
            return view('login')->with('sucesso','Cadastrado com sucesso!');
            
    }

    public function login(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'senha'=>'required',
        ],[
            'email.required'=>'O email é obrigatório!',
            'email.email'=>'Informe um email válido',
            'senha.required'=>'A senha é obrigatória!',
        ]);
        $usuario = $request->all();
        $data = DB::table('funcionarios')
        ->select('id','nome_funcionario')
        ->where('senha', '=', $usuario['senha'])
        ->get();
        if($data == "[]"){
            return redirect()->back()->with('error', 'Usuário não cadastrado!');
        }
        else{
            return view('Painel')->with('sucesso','Logado com sucesso!');
        }
    }

}
