<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinhos extends Model
{
    protected $fillable = [
        'nome',
        'id_categoria',
        'img',
        'id_produtor',
        'descricao',
        'preco',
        'stock',
        'regiao',
    ];
    public function produtor(){
        return $this->belongsTo(User::class, 'id_produtor');
    }
}
