<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva_professor extends Model
{
    protected $table = 'reserva_professor';

    protected $fillable = [
        'nome_professor',
        'materia',
        'nome_alunos',
        'horario_inicio',
        'horario_fim',
        'data_utilizacao',
        'turma',
        'descricao'
    ];
}
