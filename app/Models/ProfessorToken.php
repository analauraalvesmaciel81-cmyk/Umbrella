<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Professor;

class ProfessorToken extends Model
{
    protected $table = 'professor_token';

    protected $fillable = [
        'professor_id',
        'token',
        'valido_ate',
    ];

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class, 'professor_id');
    }
}
