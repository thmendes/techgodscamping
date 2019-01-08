<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camper extends Model
{
    public function get($element, $sortBy)
    {
        $campers = $this
    		->orderBy($element, $sortBy)
    		->get();


    	return $campers->toArray();
    }
}
