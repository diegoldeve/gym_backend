<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatosController extends Controller
{
    public function buscarClases(Request $request)
    {
        $correo = $request->input('email');
        $clases = DB::table('alumnos')
            ->where('correo', $correo)
            ->get();
        return view('alumno.buscar', ['clases' => $clases]);
    }
    public function mostrarVista()
    {
        return view('alumno.buscar');
    }
}
