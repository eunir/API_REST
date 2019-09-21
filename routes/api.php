<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->group(function(){

    //Rotas de login
    Route::prefix('login')->group(function(){

        Route::post('/','UsuariosApiController@login');
        
    });

    //Rotas do grupo usuários
    Route::prefix('usuarios')->group(function(){

        Route::get('/','UsuariosApiController@index')->name('allUsuarios');
        //Route::get('/{id}','usuariosController@getUsuarios')->name('getUsuarios');
        Route::post('/','UsuariosApiController@cadastrar')->name('insertUsuarios');
        
        //Route::put('/{id}','usuariosController@updateUsuarios')->name('updateUsuarios');
        //Route::delete('/{id}','usuariosController@deleteUsuarios')->name('deleteUsuarios');
        
    });

    //Rotas do grupo chamados
    Route::prefix('chamados')->group(function(){

        Route::get('/','ChamadosApiController@index');
        Route::get('/{id_usuario}','ChamadosApiController@listarChamado');
        Route::get('/status/{data}','ChamadosApiController@listarChamadoStatus');
        Route::post('/','ChamadosApiController@novoChamado');
        
        
    });

    //Rotas do grupo enquetes
    Route::prefix('enquetes')->group(function(){

        Route::get('/','EnquetesApiController@index');
        
        
        
    });

    //Rotas do grupo votos
    Route::prefix('votos')->group(function(){

        Route::get('/','VotosApiController@index');
        Route::post('/','VotosApiController@votacao');
        
        
    });
});