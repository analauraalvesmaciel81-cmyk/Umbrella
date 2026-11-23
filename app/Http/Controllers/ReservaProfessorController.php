<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\ProfessorToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReservaProfessorController extends Controller
{
    public function reservaprofessor_html(Request $request)
    {
        return view('reserva_professor');
    }

    public function reservar_professor(Request $request)
    {

        $request->validate([
            'nome_professor'=> 'required|string|max:255',
            'turma' => 'required|string|max:255',
            'materia' => 'required|string|max:50',
            'data_reserva' => 'required|string|max:10',
            'horario_inicio'=> 'required|string|max:5',
            'horario_fim'=> 'required|string|max:5', 
        ]);

        try {

            $reservaprofessor = new Professor;
            $reservaprofessor->nome_professor = $request->nome;
            $reservaprofessor->turma = $request->turma;
            $reservaprofessor->materia = $request->materia;
            $reservaprofessor->data_reserva = $request->data_reserva;
            $reservaprofessor->horario_inicio = $request->horario_inicio;
            $reservaprofessor->horario_fim = $request->horario_fim;

            $reservaprofessor->save();

            return response()->json(['message' => 'Biblioteca reservada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar reserva!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function listar_reservasprofessor(Request $request)
    {
        $reservaprofessores = Professor::all();

        return response()->json(['professores' => $professores, 'erro' => 'n'], 200);
    }

    public function alterar_reservaprofessor(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'nome_professor'=> 'required|string|max:255',
            'turma' => 'required|string|max:255',
            'materia' => 'required|string|max:50',
            'data_reserva' => 'required|string|max:10',
            'horario_inicio'=> 'required|string|max:5',
            'horario_fim'=> 'required|string|max:5', 
            
        ]);

        try {

            $reservaprofessor = Professor::find($request->id);

            if ($reservaprofessor->email !== $request->email) {
                $reservaprofessor_email_igual = Professor::where('email', $request->email)->first();
                if ($reservaprofessor_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado para outro usuário!', 'erro' => 's'], 200);
                }
            }
            $reservaprofessor->nome = $request->nome;
            $reservaprofessor->email = $request->email;
            $reservaprofessor->senha = $request->senha;
            $reservaprofessor->nif = $request->nif;
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

    public function login_professor(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'senha' => 'required',
        ]);

        $professor = Professor::where('email', $request->email)->first();

        if ($professor) {
            if ($professor->senha == md5($request->senha)) {
                $professor_token = new ProfessorToken;
                $professor_token->professor_id = $professor->id;
                $professor_token->token = Hash::make($professor->id.$professor->email.now());
                $professor_token->valido_ate = now()->addDays(10);

                $professor_token->save();

                return response()->json(['message' => 'Login realizado com sucesso!', 'erro' => 'n', 'token' => $professor_token->token, "professor_id" => $professor->id], 200);
            } else {
                return response()->json(['message' => 'Usuario ou Senha incorretos!', 'erro' => 's'], 200);

            }
        } else {
            return response()->json(['message' => 'Usuario não encontrado!', 'erro' => 's'], 200);
        }
    }

    public function logout(Request $request)
    {
        $request->validate([
            'professor_id' => 'required|integer|exists:professor,id',
        ]);

        try {
            $professor_token = ProfessorToken::where('professor_id', $request->professor_id)->first();
            $professor_token->delete();

            return response()->json(['message' => 'Token deletado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar token!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
    }
}