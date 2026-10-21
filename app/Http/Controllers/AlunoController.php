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
            'turma' => 'required|string',
            'rm' => 'required|integer'
        ]);

        try {

            $aluno = new Aluno;
            $aluno->nome = $request->nome;
            $aluno->email = $request->email;
            $aluno->senha = Hash::make($request->senha);
            $aluno->turma = $request->turma;
            $aluno->rm = $request->rm;
            $aluno->save();

            return response()->json(['message' => 'Aluno cadastrado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar aluno!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function listar_alunos(Request $request)
    {
        $alunos = Aluno::all();

        return response()->json(['alunos' => $alunos , 'erro' => 'n'], 200);
    }

    public function listar_aluno_simples(Request $request)
    {
        $alunos = Aluno::select('nome','email')->get();

        return response()->json(['alunos' => $alunos, 'erro' => 'n'], 200);
    }

    public function alterar_aluno(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'nome' => 'required|string|max:255',
            'email' => 'required|required|email|max:255',
            'senha' => 'required|string',
            'turma' => 'required|string',
            'rm' => 'required|integer'
        ]);


        try {

            $aluno = aluno::find($request->id);

            if ($aluno->email !== $request->email) {
                $aluno_email_igual = Aluno::where('email', $request->email)->first();
                if ($aluno_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado para outro usuário!', 'erro' => 's'], 200);
                }
            }
            $aluno->nome = $request->nome;
            $aluno->email = $request->email; 
            $aluno->senha = Hash::make($request->senha);
            $aluno->turma = $request->turma;
            $aluno->rm = $request->rm;
            $aluno->save();

            return response()->json(['message' => 'Dados alterado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar dados!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function deletar_aluno(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $aluno = aluno::find($request->id);
            $aluno->delete();

            return response()->json(['message' => 'Aluno deletado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar aluno!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
    }
}
