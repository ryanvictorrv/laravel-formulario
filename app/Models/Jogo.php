<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = [
        'nome',
        'categoria',
        'ano_criacao',
        'valor'
    ];
}
