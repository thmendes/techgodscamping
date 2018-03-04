<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    protected $fillable = ['name'];

    public function add($body)
    {
		$this->name = $body['name'];
		$this->description = $body['description'];
		$this->save();
    }

    public function get($element, $sortBy)
    {
        $modalities = $this
    		->orderBy($element, $sortBy)
    		->get();


    	return $modalities->toArray();
    }
}
