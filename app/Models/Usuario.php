<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'nome',
        'email',
        'senha',
    ];

    public function Professor()
    {
        return $this->hasMany(Professor::class, 'usuario_id');
    }
}
