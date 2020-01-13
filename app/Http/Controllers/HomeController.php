<?php

namespace tenda\Http\Controllers;

use tenda\Agenda;
use tenda\Turma;
use tenda\Aviso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MaddHatter\LaravelFullcalendar\Calendar;

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
            $turmas = Turma::all();

            $events = [];
            $events[] = Calendar::event('Event One', false, '2015-02-11T0800', '2015-02-12T0800', 0);
            $events[] = Calendar::event("Valentine's Day",true, new \DateTime('2015-02-14'),new \DateTime('2015-02-14'),'stringEventId');

            /*$calendar = Calendar::addEvents($events)->setOptions(['locale' => 'pt-br']);*/
            
            $eloquentEvent = Agenda::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

            /*$calendar->addEvents($events) //add an array with addEvents
                ->addEvent($eloquentEvent, [ //set custom color fo this event
                    'color' => '#800',
                ])->setOptions([ //set fullcalendar options
                    'firstDay' => 1
                ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
                    'viewRender' => 'function() {alert("Callbacks!");}'
                ]);*/

            return view('home',compact('agendas', 'turmas', 'avisos'));
        }else{
            return redirect()->to('/login'); 
        }         
    }
}
