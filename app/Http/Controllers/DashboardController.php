<?php

namespace tenda\Http\Controllers;

use tenda\Agenda;
use tenda\Turma;
use tenda\Aviso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agendas = Agenda::all();
        $avisos = Aviso::all();
        $turmas = Turma::all();

        return view('dashboard',compact('agendas', 'turmas', 'avisos'));
    }
}
