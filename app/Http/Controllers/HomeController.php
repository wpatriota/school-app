<?php

namespace tenda\Http\Controllers;

use tenda\Agenda;
use tenda\Turma;
use tenda\Aviso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        if($user->hasRole('admin')){
            return redirect()->to('/dashboard'); 
        }elseif($user->hasRole('user')){
            $agendas = Agenda::all();
            $avisos = Aviso::all();
            $turmas = Turma::where('aceita_matricula', 'S')->get();

            return view('home',compact('agendas', 'turmas', 'avisos'));
        }else{
            return redirect()->to('/login'); 
        }         
    }
}
