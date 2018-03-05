<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public function rangeToDate($range)
    {
    	return $dates = explode(' - ', $range);
    }
}
