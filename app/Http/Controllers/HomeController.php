<?php

namespace tenda\Http\Controllers;

use tenda\Agenda;
use tenda\Turma;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agendas = Agenda::all();
        $turmas = Turma::where('periodo_matricula', 'S')->get();

        return view('home',compact('agendas', 'turmas'));
    }
}
