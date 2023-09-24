<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function index()
    {
        return view('alumno.index');
    }

    public function storage(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
            'genero' => 'required',
            'edad' => 'required',
            'hora' => 'required|date_format:H:i',
            'fecha' => 'required|date'
        ]);

        DB::table('alumnos')->insert([
            'nombre' => $datos['nombre'],
            'apellidos' => $datos['apellidos'],
            'correo' => $datos['correo'],
            'edad' => $datos['edad'],
            'genero' => $datos['genero'],
            'hora' => $datos['hora'],
            'fecha' => $datos['fecha'],
        ]);

        //respaldo
        DB::table('alumnostotales')->insert([
            'nombre' => $datos['nombre'],
            'apellidos' => $datos['apellidos'],
            'correo' => $datos['correo'],
            'edad' => $datos['edad'],
            'genero' => $datos['genero'],
            'hora' => $datos['hora'],
            'fecha' => $datos['fecha'],
        ]);
        return redirect()->route('alumno.index')->with('mensajeExito', 'La clase se ha registrado exitosamente');
    }

    public function irBusqueda()
    {
        return view('alumno.buscar');
    }

    public function borrarClase($id)
    {
        DB::table('alumnos')->where('id', $id)->delete();
        return redirect()->route('buscar.clases')->with('mensajeExito', 'La clase se borró correctamente');
    }
}
