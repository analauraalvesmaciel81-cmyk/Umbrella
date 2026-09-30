<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function cadastro_html(Request $request)
    {
        return view('cadastro_usuario');
    }
}
