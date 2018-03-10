<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camper extends Model
{
    public function add($body)
    {
		$this->document = $body['document'];
		$this->name = $body['name'];
		$this->email = $body['email'];
		$this->phone = $body['phone'];
		$this->born = $body['born'];
		$this->street = $body['street'];
		$this->city = $body['city'];
		$this->province = $body['province'];
		$this->parent = $body['parent'];
		$this->parent_phone = $body['parent_phone'];
		$this->medicine = $body['medicine'];
		$this->shirt = $body['shirt'];
		$this->save();
    }

    public function get($element, $sortBy)
    {
        $campers = $this
    		->orderBy($element, $sortBy)
    		->get();


    	return $campers->toArray();
    }
}
