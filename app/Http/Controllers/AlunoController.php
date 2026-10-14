<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlunoController extends Controller
{
    public function aluno_html(Request $request)
    {
        return view('reserva_aluno');
    }

    public function salvar_aluno(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:aluno',
            'senha' => 'required|string',
        ]);

        try {

            $aluno = new Aluno;
            $aluno->nome = $request->nome;
            $aluno->email = $request->email;
            $aluno->senha = Hash::make($request->senha);
            $aluno->save();

            return response()->json(['message' => 'Aluno cadastrado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar aluno!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function ver_aluno(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        $aluno = Aluno::find($request->id);
        if ($aluno) {
            return response()->json(['aluno' => $aluno, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Aluno não encontrado!', 'erro' => 's'], 200);
        }
    }

    public function listar_alunos(Request $request)
    {
        $alunos = Aluno::all();

        return response()->json(['alunos' => $alunos , 'erro' => 'n'], 200);
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
