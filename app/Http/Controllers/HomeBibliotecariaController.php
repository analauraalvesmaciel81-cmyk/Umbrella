<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBibliotecariaController extends Controller
{
    public function mostrarHomeBibliotecaria(Request $request){
        $bibliotecaria = $request->mostrarHomeBibliotecaria;
        return view('home_bibliotecaria') ->with('bibliotecaria', $bibliotecaria);
    }
}