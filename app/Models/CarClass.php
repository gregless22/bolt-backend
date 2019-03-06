<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarClass extends Model {

	protected $fillable = [];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships
	public function carModel() {
		return $this->hasMany('App\Models\CarModel');
	}

	protected $table = "carClass";

}