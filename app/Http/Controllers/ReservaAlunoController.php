<?php

namespace App\Http\Controllers;

use App\Models\Reserva_aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Reserva_alunoController extends Controller
{
    public function reserva_aluno_html(Request $request)
    {
        return view('reserva_aluno');
    }

    public function cadastrar_reserva_aluno(Request $request)
    {

       
        $request->validate([
            'nome_professor_responsavel' => 'required|string|max:255',
            'materia' => 'required|string',
            'horario_inicio' => 'required|time',
            'horario_fim' => 'required|time',
            'data_utilizacao' => 'required|date',
            'turma' => 'required|string',
            'descricao' => 'required|string'

        ]);

        try {

            $reserva_aluno = new Reserva_aluno;
            $reserva_aluno->nome_professor_responsavel = $request->nome_professor_responsavel;
            $reserva_aluno->materia = $request->materia;
            $reserva_aluno->horario_inicio = $request->horario_inicio;
            $reserva_aluno->horario_fim = $request->horario_fim;
            $reserva_aluno->data_utilizacao = $request->data_utilizacao;
            $reserva_aluno->turma = $request->turma;
            $reserva_aluno->descricao = $request->descricao;
            $reserva_aluno->save();

            return response()->json(['message' => 'Reserva cadastrada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao reservar a biblioteca!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function listar_reserva_alunos(Request $request)
    {
        $reserva_aluno = Reserva_aluno::all();

        return response()->json(['reserva_professores' => $reserva_professores , 'erro' => 'n'], 200);
    }

    public function alterar_reserva_aluno(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'nome_professor_responsavel' => 'required|string',
            'materia' => 'required|string',
            'horario_inicio' => 'required|time',
            'horario_fim' => 'required|time',
            'data_utilizacao' => 'required|date',
            'turma' => 'required|string',
            'descricao' => 'required|string'

        ]);


        try {

            $reserva_aluno = Reserva_aluno::find($request->id);

            if ($reserva_aluno->email !== $request->email) {
                $reserva_aluno_email_igual = Reserva_professor::where('email', $request->email)->first();
                if ($reserva_aluno_email_igual) {
                    return response()->json(['message' => 'Email já cadastrado para outro usuário!', 'erro' => 's'], 200);
                }
            }
            $reserva_aluno->nome_professor = $request->nome_professor;
            $reserva_aluno->nome_alunos = $request->nome_alunos;
            $reserva_aluno->materia = $request->materia;
            $reserva_aluno->horario_inicio = $request->horario_inicio;
            $reserva_aluno->horario_fimnif = $request->horario_fim;
            $reserva_aluno->data_utilizacao = $request->data_utilizacao;
            $reserva_aluno->turma = $request->turma;
            $reserva_aluno->descricao = $request->descricao;
            $reserva_aluno->save();

            return response()->json(['message' => 'Dados alterado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar dados!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }

    }

    public function deletar_reserva_aluno(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $reserva_aluno = reserva_aluno::find($request->id);
            $reserva_aluno->delete();

            return response()->json(['message' => 'Reserva deletada com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar reserva!', 'erro' => 's', 'msg erro' => $th->getMessage()], 200);
        }
    }
    
}
