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
Route::get('programa\eleminar\{id}', [ProgramaController::class, 'eleminarPrograma'])->name('eleminarPrograma');