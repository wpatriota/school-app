<?php

namespace tenda\Http\Controllers;

use tenda\Aluno;
use tenda\Turma;
use tenda\Curso;
use tenda\Individuo;
use tenda\Uf;
use tenda\Lancamento;

use Illuminate\Http\Request;
use tenda\TipoLancamento;

class LancamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lancamentos = Lancamento::all();
        $tiposLancamentos = TipoLancamento::all();

        return View('lancamentos.index', compact('lancamentos','tiposLancamentos'));
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

        $lancamento = new Lancamento([
            'descricao' => $request->get('descricao'),
            'id_aluno' => $request->get('id_aluno'),
            'id_membro' => $request->get('id_membro'),
            'data_lancamento' => now(),
            'data_vencimento' => now(),
            'status' => 'N'
        ]);

        $lancamento->save();

        /*Add Aluno*/
          
        return redirect('/lancamentos')->with('success', 'Lançamento efetuada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        
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
