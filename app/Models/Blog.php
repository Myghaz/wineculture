<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Blog extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'autor',
        'categoria',
        'data',
        'preview',
        'descricao',
        'img',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
