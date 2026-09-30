<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'nome',
        'turma',
        'materia',
        'data_reserva',
        'hora_inicio',
        'hora_fim',
        'descricao',
    ];
}
