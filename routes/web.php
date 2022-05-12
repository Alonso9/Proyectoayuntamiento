<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProgramaController, ActividadController};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**************  Rutas del programa ****************/
Route::resource('programa', ProgramaController::class);
Route::get('programa/eleminar/{id}', [ProgramaController::class, 'eleminarPrograma'])->name('eleminarPrograma');
Route::get('programa/detalles/{id}', [ProgramaController::class, 'detallesPrograma'])->name('detallesPrograma');


/************ Rutas de la actividad ***************/
Route::resource('actividad', ActividadController::class);
Route::get('programa/actividades/{programa_id}', [ActividadController::class, 'actividadesPrueba'])->name('actividadesPrueba');
Route::get('programa/actividades/{programa_id}/detalles', [ActividadController::class, 'detalleActividad'])->name('detalleActividad');
Route::get('programa/actividades/{programa_id}/crearActividad', [ActividadController::class, 'crearActividad'])->name('crearActividad');
Route::get('programa/actividades/eleminar/{id}', [ActividadController::class, 'eleminarActividad'])->name('eleminarActividad');
Route::get('programa/actividades/evidencia/{id}', [ActividadController::class, 'evidenciaActividad'])->name('evidenciaActividad');
Route::get('programa/actividades/evidencia/crear/{id}', [ActividadController::class, 'subirEvidencia'])->name('acitivdad.subirEvidencia');
