<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mostrarHome(Request $request){
        $professor = $request->professor;
        $bibliotecaria = $request->bibliotecaria;
        return view('home') ->with('professor', $professor)->with('bibliotecaria', $bibliotecaria);
    }
}