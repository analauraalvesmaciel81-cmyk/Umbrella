<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Bibliotecaria;

class BibliotecariaToken extends Model
{
    protected $table = 'bibliotecaria_token';

    protected $fillable = [
        'bibliotecaria_id',
        'token',
        'valido_ate',
    ];

    public function bibliotecaria()
    {
        return $this->belongsTo(Bibliotecaria::class, 'bibliotecaria_id');
}

}