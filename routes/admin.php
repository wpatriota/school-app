<?php

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

/***** ESTOQUE *****/
Route::resource('estoque', 'EstoquesController')->middleware('auth');
Route::resource('entradasEstoque', 'entradasEstoqueController')->middleware('auth');
Route::resource('saidasEstoque', 'saidaEstoqueController')->middleware('auth');
/***** ESTOQUE *****/

/***** FINANCEIRO *****/
Route::resource('entradasFinanceiro', 'entradasFinanceiroController')->middleware('auth');
Route::resource('saidasFinanceiro', 'saidasFinanceiroController')->middleware('auth');
/***** FINANCEIRO *****/

Route::resource('tiposItem', 'TiposItemController')->middleware('auth');
Route::resource('usuarios', 'UsuariosController')->middleware('auth');
Route::resource('perfis', 'PerfisController')->middleware('auth');

/***** EXCEL *****/
Route::get('export', 'ExcelUserController@export')->name('export');
Route::get('importExportView', 'ExcelUserController@importExportView')->name('importExportView');
Route::post('import', 'ExcelUserController@import')->name('import');
/***** EXCEL *****/

Route::get('exportarMembro', 'ExcelMembroController@export')->name('export');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('autocomplete', 'IndividuosController@autocomplete')->name('autocomplete');

