<?php

namespace App\Http\Controllers;

use App\Individuo;
use Illuminate\Http\Request;
use App\Http\Requests;

class IndividuoController extends Controller
{
    public function index()
    {
        $individuos = Individuo::all();
        return response()->json($individuos);
    }
}
