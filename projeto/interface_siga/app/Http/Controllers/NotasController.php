<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\materia;
use App\Models\nota;


class NotasController extends Controller
{
    public function index(){
    
        $materias = materia::all();

        // Passe os dados para a view
        return view('site.notas', ['materia' => $materias]);


    }



}