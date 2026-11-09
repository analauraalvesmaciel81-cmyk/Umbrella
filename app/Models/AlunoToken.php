<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Aluno;

class AlunoToken extends Model
{
    protected $table = 'aluno_token';

    protected $fillable = [
        'aluno_id',
        'token',
        'valido_ate',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
