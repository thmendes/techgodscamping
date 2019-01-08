<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Person extends Model
{
    //use Searchable;
    
    protected $fillable = [
        'cpf', 'rg', 'name', 'email', 'phone', 'born', 'street', 'city', 'province', 'parent', 'parent_phone', 'medicine', 'shirt'
    ];

    public function searchableAs()
	{
		return 'name';
    }
}

