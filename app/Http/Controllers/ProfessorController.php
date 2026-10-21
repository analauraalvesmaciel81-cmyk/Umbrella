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

    public function cadastrar_professor(Request $request)
    {

       
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:professor',
            'senha' => 'required|string|max:8',
            'nif' => 'required|string|max:9'
        ]);

        try {

            $professor = new Professor;
            $professor->nome = $request->nome;
            $professor->email = $request->email;
            $professor->senha = Hash::make($request->senha);
            $professor->nif = $request->nif;
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
             $professor->Usuario;
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

    public function listar_professores_simples(Request $request)
    {
        $professores = Professor::select('nome', 'email')->get();

        return response()->json(['professores' => $professores, 'erro' => 'n'], 200);
    }

    public function alterar_professor(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'nome' => 'required|string|max:255',
            'email' => 'required|required|email|max:255',
            'senha' => 'required|string',
            'nif' => 'required|integer'
        ]);


        try {

            $professor = Professor::find($request->id);

            if ($professor->email !== $request->email) {
                $professor_email_igual = Professor::where('email', $request->email)->first();
                if ($professor_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado para outro usuário!', 'erro' => 's'], 200);
                }
            }
            $professor->nome = $request->nome;
            $professor->email = $request->email;
            $professor->senha = $request->senha;
            $professor->nif = $request->nif;
            $professor->save();

            return response()->json(['message' => 'Dados alterado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar dados!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function deletar_professor(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $professor = Professor::find($request->id);
            $professor->delete();

            return response()->json(['message' => 'Usuário deletado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar usuário!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
    }
    
}
