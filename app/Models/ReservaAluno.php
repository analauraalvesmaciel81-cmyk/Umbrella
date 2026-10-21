<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva_aluno extends Model
{
    protected $table = 'reserva_aluno';

    protected $fillable = [
        'nome_professor_responsavel',
        'materia',
        'horario_inicio',
        'horario_fim',
        'data_utilizacao',
        'turma',
        'descricao'

    ];
}
