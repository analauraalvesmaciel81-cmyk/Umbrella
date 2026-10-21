<?php

namespace App\Http\Controllers;

use App\Models\Reserva_professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReservaProfessorController extends Controller
{
    public function reserva_professor_html(Request $request)
    {
        return view('reserva_professor');
    }

    public function cadastrar_reserva_professor(Request $request)
    {

       
        $request->validate([
            'nome_professor' => 'required|string|max:255',
            'materia' => 'required|string',
            'horario_inicio' => 'required|time',
            'horario_fim' => 'required|time',
            'data_utilizacao' => 'required|date',
            'turma' => 'required|string',
            'descricao' => 'required|string'

        ]);

        try {

            $reserva_professor = new Reserva_professor;
            $reserva_professor->nome_professor = $request->nome;
            $reserva_professor->nome_alunos = $request->nome_alunos;
            $reserva_professor->materia = $request->materia;
            $reserva_professor->horario_inicio = $request->horario_inicio;
            $reserva_professor->horario_fim = $request->horario_fim;
            $reserva_professor->data_utilizacao = $request->data_utilizacao;
            $reserva_professor->turma = $request->turma;
            $reserva_professor->descricao = $request->descricao;
            $reserva_professor->save();

            return response()->json(['message' => 'Reserva cadastrada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao reservar a biblioteca!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function listar_reserva_professores(Request $request)
    {
        $reserva_professores = Reserva_professor::all();

        return response()->json(['reserva_professores' => $reserva_professores , 'erro' => 'n'], 200);
    }

    public function alterar_reserva_professor(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'nome_professor' => 'required|string',
            'nome_alunos' => 'required|string',
            'materia' => 'required|string',
            'horario_inicio' => 'required|time',
            'horario_fim' => 'required|time',
            'data_utilizacao' => 'required|date',
            'turma' => 'required|string',
            'descricao' => 'required|string'

        ]);


        try {

            $reserva_professor = Reserva_professor::find($request->id);

            if ($reserva_professor->email !== $request->email) {
                $reserva_professor_email_igual = Reserva_professor::where('email', $request->email)->first();
                if ($reserva_professor_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado para outro usuário!', 'erro' => 's'], 200);
                }
            }
            $professor->nome_professor = $request->nome_professor;
            $professor->nome_alunos = $request->nome_alunos;
            $professor->materia = $request->materia;
            $professor->horario_inicio = $request->horario_inicio;
            $professor->horario_fimnif = $request->horario_fim;
            $professor->data_utilizacao = $request->data_utilizacao;
            $professor->turma = $request->turma;
            $professor->descricao = $request->descricao;
            $professor->save();

            return response()->json(['message' => 'Dados alterado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar dados!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function deletar_reserva_professor(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $reserva_professor = reserva_professor::find($request->id);
            $reserva_professor->delete();

            return response()->json(['message' => 'Reserva deletada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar reserva!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
    }
    
}
