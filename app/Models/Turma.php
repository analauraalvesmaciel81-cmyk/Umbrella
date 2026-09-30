<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';

    protected $fillable = [
        'nome',
        'turma_id',
        'turma_aluno_id',
    ];
}
