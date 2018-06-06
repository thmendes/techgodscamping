<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = array('album_id');

    public function album()
    {
        return $this->belongsTo('App\Models\Album');
    }
}
