<?php

namespace tenda\Http\Controllers;

use tenda\Individuo;
use Illuminate\Http\Request;

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
            'sobrenome'=> 'required',
            'rg'=> 'required',
            'cpf'=> 'required',
            'email'=> 'required',
            'telefone'=> 'required',
            'celular'=> 'required',
            'endereco'=> 'required',
            'bairro'=> 'required',
            'cidade'=> 'required',
            'estado'=> 'required',
            'cep'=> 'required',
            'data_nascimento'=> 'required',
            'estado_civil'=> 'required',
            'profissao'=> 'required',
            'observacao' => 'required'
        ]);

        $individuo = new Individuo([
            'nome' => $request->get('nome'),
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
            'estado' => $request->get('estado'),
            'cep' => $request->get('cep'),
            'data_nascimento' => $request->get('data_nascimento'),
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
