<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bibliotecaria extends Model
{
    protected $table = 'bibliotecaria';

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'nif'
    ];
}
