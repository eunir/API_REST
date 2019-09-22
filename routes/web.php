<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
//Route::view('painel','painel');
Route::get('/painel', function () {
    return view('Painel');
});
Route::get('/chamados', function () {
    return view('chamados');
});
Route::get('/detalhes', function () {
    return view('detalhe');
});

Route::get('cadastro', 'FuncionariosWebController@redireciona');
Route::post('login','FuncionariosWebController@login');
Route::post('cadastrar', 'FuncionariosWebController@cadastrar');

Route::get('chamados','ChamadosWebController@redireciona');
Route::post('listar','ChamadosWebController@listarPorStatus');
Route::post('detalhar','ChamadosWebController@detalharChamado');

