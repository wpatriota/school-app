<?php

use Illuminate\Http\Request;
use tenda\Agenda;
use tenda\Curso;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*AGENDA*/
Route::get('agenda', function(){
	return Agenda::all();
});

Route::get('agenda/{id}', function($id){
	return Agenda::find($id);
});

/*CURSO*/
Route::get('curso', function(){
	return Curso::all();
});

Route::get('curso/{id}', function($id){
	return Curso::find($id);
});