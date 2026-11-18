<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva_professor extends Model
{
    protected $table = 'reserva_professor';

    protected $fillable = [
        'nome_professor',
        'turma',
        'materia',
        'data_reserva',
        'horario_inicio',
        'horario_fim',
        'descricao'

    ];
}
