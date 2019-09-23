<?php

namespace tenda\Http\Controllers;

use tenda\Membro;
use tenda\Individuo;
use tenda\Uf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
        $uf = Uf::All();
        return view('membros.create', compact('uf'));
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

        $dataInicio = Carbon::createFromFormat('d/m/Y', $request->data_inicio);
        $dataTermino = Carbon::createFromFormat('d/m/Y', $request->data_saida);

        $membro = new Membro([
            'id_individuo' => $individuo,
            'data_inicio' => $dataInicio->format('Y-m-d'),
            'data_saida'=> $dataTermino->format('Y-m-d'),
            'status' => $request->get('status')
        ]);

        $membro->save();
          
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
    public function update(Request $request, Membro $membro)
    {
        $request->validate([
            'nome'=>'required',
            'sobrenome'=> 'required',
            'cpf' =>'required'
        ]);

        $membro->individuo->nome = $request->get('nome');
        $membro->individuo->sobrenome = $request->get('sobrenome');
        $membro->individuo->email = $request->get('email');
        $membro->individuo->rg = $request->get('rg');
        $membro->individuo->cpf = $request->get('cpf');

        $membro->save();

        return redirect('/membros')->with('success', 'Alterado com sucesso');
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
