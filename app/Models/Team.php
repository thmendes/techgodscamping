<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
      protected $fillable = [
        'name',
        'color_id',
        'description',
        'camping_id',
    ];

    public function angel()
    {
        return $this->hasMany('App\Models\Angel');
    }
}
