<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reserva_professorController extends Controller
{
    public function professor_html(Request $request){
        return view('reserva_professor');
    }
}
