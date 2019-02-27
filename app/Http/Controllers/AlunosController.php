<?php

namespace tenda\Http\Controllers;

use tenda\Aluno;
use tenda\Turma;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();

        return View('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turmas = Turma::all();

        return view('alunos.create', compact('turmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $individuoController = new IndividuosController();
        $individuo = $individuoController->store($request);

        $request->validate([
            'id_turma'=> 'required',
            'data_matricula' => 'required',
            'valor_mensalidade' => 'required'
        ]);

        $aluno = new Aluno([
            'id_individuo' => $individuo,
            'id_turma'=> $request->get('id_turma'),
            'data_matricula' => $request->get('data_matricula'),
            'valor_mensalidade'=> $request->get('valor_mensalidade')
        ]);

        $aluno->save();
          
        return redirect('/alunos')->with('success', 'Aluno adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
