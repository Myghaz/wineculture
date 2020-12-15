<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'foto',
        'tipovinho',
        'descricao',
    ];
}
