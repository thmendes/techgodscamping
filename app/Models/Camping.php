<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camping extends Model
{
	protected $fillable = [
		'name',
		'description',
		'modality_id',
		'teams',
		'campers',
		'begin_at',
		'end_at'
	];
}
