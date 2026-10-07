<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    public function professor_html(Request $request)
    {
        return view('reserva_professor');
    }

    public function salvar_professor(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:professor',
            'senha' => 'required|string',
        ]);

        try {

            $professor = new Professor;
            $professor->nome = $request->nome;
            $professor->email = $request->email;
            $professor->senha = Hash::make($request->senha);
            $professor->save();

            return response()->json(['message' => 'Professor cadastrado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar professor!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function ver_professor(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        $professor = Professor::find($request->id);
        if ($professor) {
            return response()->json(['professor' => $professor, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Professor não encontrado!', 'erro' => 's'], 200);
        }
    }

    public function listar_professores(Request $request)
    {
        $professores = Professor::all();

        return response()->json(['professores' => $professores , 'erro' => 'n'], 200);
    }

    public function listar_usuarios_simples(Request $request)
    {
        $usuarios = Usuario::select('nome', 'email')->get();

        return response()->json(['usuarios' => $usuarios, 'erro' => 'n'], 200);
    }

    public function alterar_usuario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|required|email|max:255',
            'senha' => 'required|string',
        ]);


        try {

            $usuario = Usuario::find($request->id);

            if ($usuario->email !== $request->email) {
                $usuario_email_igual = Usuario::where('email', $request->email)->first();
                if ($usuario_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado para outro usuário!', 'erro' => 's'], 200);
                }
            }
            $usuario->nome = $request->nome;
            $usuario->email = $request->email; 
            $usuario->senha = Hash::make($request->senha);
            $usuario->save();

            return response()->json(['message' => 'Dados alterado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar dados!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function deletar_usuario(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
        ]);

        try {
            $usuario = Usuario::find($request->id);
            $usuario->delete();

            return response()->json(['message' => 'Usuário deletado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar usuário!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
    }
}
