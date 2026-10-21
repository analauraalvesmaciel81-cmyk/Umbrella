<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'nome_1',
        'nome_2',
        'nome_3',
        'nome_4'
    ];
}
