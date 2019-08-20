<?php

namespace tenda\Http\Controllers;

use tenda\User;
use tenda\Membro;
use tenda\Aluno;
use tenda\Individuo;
use Illuminate\Http\Request;

class PerfisController extends Controller
{
    public function show($id)
    {
    	$user = User::find($id);
    	$individuo = Individuo::where('user_id', $id)->first();
    	$membro = Membro::where('id_individuo', $individuo->id)->first();
    	$aluno = Aluno::where('id_individuo', $individuo->id)->get();
    	
        return view('perfis.show', compact('user', 'individuo', 'membro', 'aluno'));
    }
}
