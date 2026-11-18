<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaUsuarioController extends Controller
{
    public function login_html(Request $request)
    {
        return view('pagina');
    }
}
