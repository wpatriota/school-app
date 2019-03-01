<?php

namespace tenda\Http\Controllers;

use tenda\Turma;
use tenda\Curso;
use tenda\Professor;
use tenda\Aluno;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::all();

        return View('turmas.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        $professores = Professor::all();

        return view('turmas.create', compact('turma', 'cursos', 'professores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_curso'=>'required',
            'nome'=> 'required',
            'data_inicio' => 'required'
        ]);

          $turma = new Turma([
            'id_curso' => $request->get('id_curso'),
            'nome'=> $request->get('nome'),
            'data_inicio'=> $request->get('data_inicio')
          ]);

          $turma->save();
          
          return redirect('/turmas')->with('success', 'Turma adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \tenda\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {        
        $alunos = Aluno::where('id_turma', $turma->id)->get();

        return view('turmas.show', compact('turma', 'alunos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \tenda\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        $cursos = Curso::all();
        $professores = Professor::all();

        return view('turmas.edit', compact('turma', 'cursos', 'professores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        $request->validate([
            'id_curso'=>'required',
            'nome'=> 'required',
            'data_inicio' =>'required'
        ]);

        $turma->id_curso = $request->get('id_curso');
        $turma->nome = $request->get('nome');
        $turma->data_inicio = $request->get('data_inicio');

        $turma->save();

        return redirect('/turmas')->with('success', 'Alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \tenda\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        $turma->delete();

        return redirect('/turmas')->with('success', 'Turma removida com sucesso');
    }
}
