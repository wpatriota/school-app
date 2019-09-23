<?php

namespace tenda\Http\Controllers;

use tenda\Individuo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IndividuosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'user_id',
            'sobrenome',
            'rg',
            'cpf'=> 'required',
            'email'=> 'required',
            'telefone',
            'celular',
            'endereco',
            'bairro',
            'cidade',
            'id_estado',
            'cep',
            'data_nascimento',
            'estado_civil',
            'profissao',
            'observacao'
        ]);

        $dataNascimento = Carbon::createFromFormat('d/m/Y', $request->data_nascimento);

        $individuo = new Individuo([
            'nome' => $request->nome,
            'user_id' => $request->get('user_id'),
            'sobrenome' => $request->get('sobrenome'),
            'rg' => $request->get('rg'),
            'cpf' => $request->get('cpf'),
            'email' => $request->get('email'),
            'telefone' => $request->get('telefone'),
            'celular' => $request->get('celular'),
            'endereco' => $request->get('endereco'),
            'bairro' => $request->get('bairro'),
            'cidade' => $request->get('cidade'),
            'id_estado' => $request->get('id_estado'),
            'cep' => $request->get('cep'),
            'data_nascimento' => $dataNascimento->format('Y-m-d'),
            'estado_civil' => $request->get('estado_civil'),
            'profissao' => $request->get('profissao'),
            'observacao' => $request->get('observacao')
        ]);

        $individuo->save();
        return $individuo->id;
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
    public function edit($id)
    {
        //
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
