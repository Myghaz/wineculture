<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amizades extends Model
{
    protected $fillable = [
        'estado',
        'id_envio',
        'id_destino'
    ];
    public function user() {
        return $this->belongsTo(User::class, 'id_envio');
    }
}
