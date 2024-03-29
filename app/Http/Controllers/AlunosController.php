<?php

namespace tenda\Http\Controllers;

use tenda\Aluno;
use tenda\Turma;
use tenda\Curso;
use tenda\Individuo;
use tenda\Uf;
use tenda\FrequenciaColegio;
use tenda\Lancamento;

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
        $cursos = Curso::all();
        $individuos = Individuo::all();
        $uf = Uf::All();
        
        return view('alunos.create', compact('turmas', 'cursos', 'individuos', 'uf'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Add Aluno*/
        $request->validate([
            'id_turma'=> 'required',
            'valor_mensalidade' => 'required'
        ]);

        $aluno = new Aluno([
            'id_individuo' => $request->get('id_individuo'),
            'id_turma'=> $request->get('id_turma'),
            'data_matricula' => now(),
            'valor_mensalidade'=> $request->get('valor_mensalidade')
        ]);

        $aluno->save();

        $lancamento = new Lancamento([
            'id_aluno' => $aluno->id,
            'id_membro' => 1,
            'id_tipo_lancamento' => 1,
            'data_lancamento' => now(),
            'descricao' => 'Mensalidade 1',
            'data_vencimento' => now(),
            'valor'=> $request->get('valor_mensalidade'),
            'status' => 'N'
        ]);

        $lancamento->save();

        /*Add Aluno*/
          
        return redirect('/alunos')->with('success', 'Matrícula efetuada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);
        $frequenciaColegio = FrequenciaColegio::where('id_aluno', $id)->get();
        $individuo = Individuo::find($aluno->id_individuo);

        return view('alunos.show', compact('aluno', 'individuo', 'frequenciaColegio'));
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
