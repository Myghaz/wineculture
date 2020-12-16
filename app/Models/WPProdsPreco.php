<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class WPProdsPreco extends Model
{
    protected $connection = 'wordpress_db';   
  protected $table = 'postmeta';
  protected $primaryKey = 'meta_id';
  // adding a global scoope in yoour post model
  protected static function boot()
  {
    parent::boot();

    static::addGlobalScope('meta_key', function (Builder $builder) {
      $builder->where('meta_key','_regular_price');
       
    });
  }
}
