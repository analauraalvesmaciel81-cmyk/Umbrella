<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;


class Professor extends Model
{
    protected $table = 'professor';

    protected $fillable = [
        'materia',
        'usuario_id',
    ];

    public function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
