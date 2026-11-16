<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginBibliotecariaController extends Controller
{
    public function loginbibliotecaria_html(Request $request){
        return view('login_bibliotecaria');
    }
}
