<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Volunteer extends Model
{
	use Searchable;
	
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
        $volunteers = $this
    		->orderBy($element, $sortBy)
    		->get();


    	return $volunteers->toArray();
	}
	
	public function searchableAs()
	{
		return 'name';
	}
}
