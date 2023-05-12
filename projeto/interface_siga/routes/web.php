<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaltaController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\HorarioController;

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

//Home Routes
Route::get("/", [HomeController::class, 'home'])->name('site.home');

Route::get("/Faltas_parciais", [FaltaController::class, 'falta'])->name('site.falta');
Route::get("/Notas_parciais", [NotasController::class, 'notas'])->name('site.notas');
Route::get("/Horario_parciais", [HorarioController::class, 'horario'])->name('site.horario');
