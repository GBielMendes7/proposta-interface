<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get("/home", [HomeController::class, 'home'])->name('site.home');
    Route::get("/Faltas_parciais", [FaltaController::class, 'index'])->name('site.falta');
    Route::get("/Notas_parciais", [NotasController::class, 'notas'])->name('site.notas');
    Route::get("/Horario_parciais", [HorarioController::class, 'index'])->name('site.horario');
});




require __DIR__.'/auth.php';
