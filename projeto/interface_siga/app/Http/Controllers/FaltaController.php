<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Falta;


class FaltaController extends Controller
{
    public function index(){

        $faltas = Falta::where('user_id', Auth::id())->get();

        // Passe os dados para a view
        return view('site.falta', ['falta' => $faltas]);
    
    }


}