<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\EntrenadorController;
use Illuminate\Support\Facades\Route;
/*| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();
//ENTRENADOR
Route::get('/entrenador.index', [EntrenadorController::class, 'index'])->name('entrenador.index');

//alumno
Route::get('/alumno.irBusqueda', [AlumnoController::class, 'irBusqueda'])->name('alumno.irBusqueda');
Route::get('/alumno.index', [AlumnoController::class, 'index'])->name('alumno.index');
Route::post('/alumno.index', [AlumnoController::class, 'storage'])->name('alumno.storage');
Route::delete('/borrar/clase/{id}', [AlumnoController::class, 'borrarClase'])->name('borrar.clase');

//buscador
Route::post('/alumno.buscar', [DatosController::class, 'buscarClases'])->name('buscar.clases');
Route::get('/alumno.buscar', [DatosController::class, 'mostrarVista'])->name('buscar.formulario');
