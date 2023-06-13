<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\nota;


class NotasController extends Controller
{
    public function index(){
    
        $notas = Nota::where('user_id', Auth::id())->get();

        // Passe os dados para a view
        return view('site.notas', ['nota' => $notas]);


    }



}