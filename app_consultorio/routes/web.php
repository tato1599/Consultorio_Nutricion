<?php

use App\Http\Controllers\patientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','principal')->name('principal');
Route::get('/pacientes',[patientController::class,'consultar'])->name('pacientes');
Route::get('/pacientes/crear',[patientController::class, 'crear'])->name('crear');
Route::post('/',[patientController::class,'guardar'])->name('guardar');
Route::view('/nuevoPaciente','nuevoPaciente')->name('nuevo');
