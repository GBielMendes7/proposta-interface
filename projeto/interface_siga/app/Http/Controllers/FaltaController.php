<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FaltaController extends Controller
{
    public function falta(){
    
        return view('site.falta');
    }


}