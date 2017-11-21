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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-- cadastro de grupos
Route::resource('/grupo','GrupoController',  ['names' => ['create' => 'sociedade']])->middleware('auth');

//-- cadastro de novas tarefas
Route::resource('/tarefa','TarefaController',  ['names' => ['create' => 'tarefa']]);

Route::resource('/fases','FaseController',  ['names' => ['create' => 'fases'] ] );

Route::resource('/fases/upload','FaseController@upload');

Route::resource('/valida','ValidaController');
