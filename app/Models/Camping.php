<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camping extends Model
{

	public function add($body, Helper $helper)
    {
		$dates = $helper->rangeToDate($body['range']);

		$this->name = $body['name'];
		$this->description = $body['description'];
		$this->modality_id = $body['modality_id'];
		$this->teams = $body['teams'];
		$this->campers = $body['campers'];
		$this->begin_at = $dates['0'];
		$this->end_at = $dates['1'];
		$this->save();
    }    

    public function get($element, $sortBy)
    {
        $campings = $this
    		->orderBy($element, $sortBy)
    		->get();


    	return $campings->toArray();
    }
}
