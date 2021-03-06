<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	

	protected $fillable = [
		'name', 'phone', 'description','location','expire_date'
	];

	public function truck(){
		return $this->hasMany(Truck::class);
	}



}

