<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva_professor extends Model
{
    protected $table = 'reserva_professor';

    protected $fillable = [
        'reserva_professor_id',
        'quantidade de alunos',
    ];
}
