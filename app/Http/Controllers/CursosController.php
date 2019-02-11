<?php

namespace tenda\Http\Controllers;

use tenda\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();

        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('cursos.create');
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
            'nome'=>'required',
            'descricao'=> 'required',
            'valor_mensalidade' => 'required'
        ]);

          $curso = new Curso([
            'nome' => $request->get('nome'),
            'descricao'=> $request->get('descricao'),
            'valor_mensalidade'=> $request->get('valor_mensalidade')
          ]);

          $curso->save();
          
          return redirect('/cursos')->with('success', 'Curso adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \tenda\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \tenda\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \tenda\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nome'=>'required',
            'descricao'=> 'required',
            'valor_mensalidade' =>'required'
        ]);

        $curso->nome = $request->get('nome');
        $curso->descricao = $request->get('descricao');
        $curso->valor_mensalidade = $request->get('valor_mensalidade');

        $curso->save();

        return redirect('/cursos')->with('success', 'Alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \tenda\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect('/cursos')->with('success', 'Curso removido');
    }
}
