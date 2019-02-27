<?php

namespace tenda\Http\Controllers;

use tenda\Membro;
use tenda\Individuo;
use Illuminate\Http\Request;

class MembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membros = Membro::all();

        return view('membros.index', compact('membros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membros.create');
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
            'status' => 'required'
        ]);

        $aluno = new Membro([
            'id_individuo' => $individuo,
            'data_inicio' => $request->get('data_inicio'),
            'data_saida'=> $request->get('data_saida'),
            'status' => $request->get('status')
        ]);

        $aluno->save();
          
        return redirect('/membros')->with('success', 'Membro adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membro = Membro::find($id);
        $individuo = Individuo::find($membro->id_individuo);

        return view('membros.show', compact('membro', 'individuo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Membro $membro)
    {
        return view('membros.edit', compact('membro'));
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
