<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva_aluno extends Model
{
    protected $table = 'reserva_aluno';

    protected $fillable = [
        'reserva_id',
        'aluno_reserva_id',
    ];
}
