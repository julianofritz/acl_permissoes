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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/client', function () {
    return view('client');
});

Route::group(['prefix' => '/'], function(){
    Route::get('cliente/cadastrar', 'ClientsController@cadastrar');
});

Route::group(['prefix' => '/admin'], function(){
    Route::get('client', 'ClientsController@listar');

    Route::get('client/form-cadastrar', 'ClientsController@formCadastrar');
    Route::post('client/cadastrar', 'ClientsController@cadastrar');

    Route::get('client/{id}/form-editar', 'ClientsController@formEditar');
    Route::post('client/{id}/editar', 'ClientsController@editar');

    Route::get('client/{id}/excluir', 'ClientsController@excluir');

    Route::group(['prefix' => '/cliente'], function() {
        Route::get('cadastrar', 'ClientsController@cadastrar');
    });
});
