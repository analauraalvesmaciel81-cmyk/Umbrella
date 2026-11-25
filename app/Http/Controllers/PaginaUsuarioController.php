<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaUsuarioController extends Controller
{
    public function pagina_html(Request $request)
    {
        return view('pagina_usuario');
    }
}
