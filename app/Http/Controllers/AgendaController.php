<?php

namespace tenda\Http\Controllers;

use tenda\Agenda;
use tenda\TipoEvento;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::all();

        return View('agenda.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposEvento = TipoEvento::all();

        return view('agenda.create', compact('tiposEvento'));
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
            'id_tipo_evento'=>'required',
            'nome_evento'=> 'required',
            'data' => 'required',
            'horario' => 'required',
            'evento_publico' => 'required'
        ]);

        $agenda = new Agenda([
            'id_tipo_evento' => $request->get('id_tipo_evento'),
            'nome_evento'=> $request->get('nome_evento'),
            'data'=> $request->get('data'),
            'horario'=> $request->get('horario'),
            'evento_publico'=> $request->get('evento_publico'),
        ]);

        $agenda->save();
          
        return redirect('/agenda')->with('success', 'Evento adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $agendas = Agenda::all();

        return View('agenda.show', compact('agendas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect('/agenda')->with('success', 'Evento removido com sucesso');
    }
}
