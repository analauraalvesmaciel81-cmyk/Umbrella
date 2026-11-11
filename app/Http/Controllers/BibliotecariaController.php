<?php

namespace App\Http\Controllers;

use App\Models\Bibliotecaria;
use App\Models\BibliotecariaToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BibliotecariaController extends Controller
{
    public function painel_bibliotecaria(Request $request)
    {
        return view('home');
    }

    public function cadastrar_bibliotecaria(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:bibliotecaria',
            'senha' => 'required|string|max:8',
            'nif' => 'required|string|max:9',
        ]);

        try {

            $bibliotecaria = new \App\Models\Bibliotecaria;
            $bibliotecaria->nome = $request->nome;
            $bibliotecaria->email = $request->email;
            $bibliotecaria->senha = md5($request->senha);
            $bibliotecaria->nif = $request->nif;
            $bibliotecaria->save();

            return response()->json(['message' => 'Bibliotecária cadastrada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar bibliotecária!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
 
    }

     public function login_bibliotecaria(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'senha' => 'required',
        ]);

        $bibliotecaria = Bibliotecaria::where('email', $request->email)->first();

        if ($bibliotecaria) {
            if ($bibliotecaria->senha == md5($request->senha)) {
                $bibliotecaria_token = new BibliotecariaToken;
                $bibliotecaria_token->bibliotecaria_id = $bibliotecaria->id;
                $bibliotecaria_token->token = Hash::make($bibliotecaria->id.$bibliotecaria->email.now()); 
                $bibliotecaria_token->valido_ate = now()->addDays(10);

                $bibliotecaria_token->save();

                return response()->json(['message' => 'Login realizado com sucesso!', 'erro' => 'n', 'token' => $bibliotecaria_token->token, "bibliotecaria_id" => $bibliotecaria->id], 200);
            } else {
                return response()->json(['message' => 'Usuario ou Senha incorretos!', 'erro' => 's'], 200);

            }
        } else {
            return response()->json(['message' => 'Usuario não encontrado!', 'erro' => 's'], 200);
        }
    }

    public function logout_bibliotecaria(Request $request)
    {
        $request->validate([
            'bibliotecaria_id' => 'required|integer|exists:bibliotecaria,id',
        ]);

        try {
            $bibliotecaria_token = BibliotecariaToken::where('bibliotecaria_id', $request->bibliotecaria_id)->first();
            $bibliotecaria_token->delete();

            return response()->json(['message' => 'Token deletado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar token!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
    }
}
