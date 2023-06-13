<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\falta;
use App\Models\materia;


class FaltaController extends Controller
{
    public function index(){

        $materias = materia::all();

        // Passe os dados para a view
        return view('site.falta', ['materia' => $materias]);
    
    }


}