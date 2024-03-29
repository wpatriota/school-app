<?php

namespace tenda\Http\Controllers;

use tenda\EntradaFinanceiro;
use Illuminate\Http\Request;

class EntradasFinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradasFinanceiro = EntradaFinanceiro::all();

        return view('entradaFinanceiro.index',compact('entradasFinanceiro'));
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
        //
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

    public function inadimplentes()
    {
        $entradasFinanceiro = EntradaFinanceiro::all();

        return view('entradaFinanceiro.inadimplentes',compact('entradasFinanceiro'));
    }

    public function demonstrativo()
    {
        $entradasFinanceiro = EntradaFinanceiro::all();

        return view('entradaFinanceiro.demonstrativo',compact('entradasFinanceiro'));
    }

    public function lancamentos()
    {
        $entradasFinanceiro = EntradaFinanceiro::all();

        return view('entradaFinanceiro.lancamentos',compact('entradasFinanceiro'));
    }
}
