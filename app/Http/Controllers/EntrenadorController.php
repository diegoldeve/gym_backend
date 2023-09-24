<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrenadorController extends Controller
{
    //
    public function index()
    {
        $alumnos = DB::table('alumnos')->get();
        return view('entrenador.index', compact('alumnos'));
    }
}
