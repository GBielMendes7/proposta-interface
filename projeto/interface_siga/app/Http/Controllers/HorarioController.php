<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HorarioController extends Controller
{
    public function horario(){
    
        return view('site.horario');
    }


}