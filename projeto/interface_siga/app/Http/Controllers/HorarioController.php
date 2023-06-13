<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\nota;


class HorarioController extends Controller
{
    public function index()
    {
        $notas = Nota::where('user_id', Auth::id())->get();
        $materias = $notas->map(function ($nota) {
            return $nota->materia;
        });

        // Passe os dados para a view
        return view('site.horario', ['materia' => $materias]);
    }

}