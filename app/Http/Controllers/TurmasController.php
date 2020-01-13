<?php

namespace tenda\Http\Controllers;

use tenda\Turma;
use tenda\Curso;
use tenda\Professor;
use tenda\Aluno;
use tenda\Agenda;
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

        return view('turmas.create', compact('cursos', 'professores'));
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
            'data_inicio' => 'required',
            'data_termino' => 'required'
        ]);

          $turma = new Turma([
            'id_curso' => $request->get('id_curso'),
            'nome'=> $request->get('nome'),
            'descricao'=> $request->get('descricao'),
            'data_inicio'=> date('Y-m-d', strtotime($request->get('data_inicio'))),
            'data_termino'=> date('Y-m-d', strtotime($request->get('data_termino'))),
            'id_professor' => $request->get('id_professor'),
            'dia_aula' => $request->get('dia_aula'),
            'horario_aula' =>  now(),
            'frequencia_minima' => $request->get('frequencia_minima'),
            'periodo_matricula_de'=> date('Y-m-d', strtotime($request->get('periodo_matricula_de'))),
            'periodo_matricula_ate'=> date('Y-m-d', strtotime($request->get('periodo_matricula_ate')))
          ]);

          $turma->save();

          $agenda = new Agenda([
            'id_tipo_evento' => 1,
            'nome_evento'=> 'Aula - '. $request->get('nome'),
            'data'=> date('Y-m-d', strtotime($request->get('data_inicio'))),
            'horario'=> now(),
            'evento_publico'=> 'N'
          ]);
          
          $agenda->save();

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
