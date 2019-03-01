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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes(['register' => false]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cursos', 'CursosController')->middleware('auth');
Route::resource('alunos', 'AlunosController')->middleware('auth');
Route::resource('professores', 'ProfessoresController')->middleware('auth');
Route::resource('turmas', 'TurmasController')->middleware('auth');
Route::resource('agenda', 'AgendaController')->middleware('auth');
Route::resource('membros', 'MembrosController')->middleware('auth');
Route::resource('tiposevento', 'TiposEventoController')->middleware('auth');
Route::resource('individuos', 'IndividuosController')->middleware('auth');
Route::resource('frequenciasColegio', 'FrequenciasColegioController')->middleware('auth');
Route::resource('frequenciasTenda', 'FrequenciasTendaController')->middleware('auth');
Route::resource('gruposLimpeza', 'GruposLimpezaController')->middleware('auth');
Route::resource('estoque', 'EstoquesController')->middleware('auth');
Route::resource('tiposItem', 'TiposItemController')->middleware('auth');



