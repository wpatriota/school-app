<?php

namespace tenda\Http\Controllers;

use tenda\Professor;
use tenda\Individuo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professor::all();

        return View('professores.index', compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $individuos = Individuo::all();
        return view('professores.create', compact('individuos'));
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
            'id_individuo'=>'required',
            'data_inicio'=> 'required'
        ]);

        $dataInicio = Carbon::createFromFormat('d/m/Y', $request->data_inicio);
        $dataTermino = Carbon::createFromFormat('d/m/Y', $request->data_termino);

        $professor = new Professor([
            'id_individuo' => $request->get('id_individuo'),
            'data_inicio'=> $dataInicio->format('Y-m-d'),
            'data_termino'=> $dataTermino->format('Y-m-d')
        ]);

        $professor->save();
          
        return redirect('/professores')->with('success', 'Professor adicionado com sucesso');
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
    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
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
