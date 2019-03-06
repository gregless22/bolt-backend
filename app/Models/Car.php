<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

	protected $fillable = [];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

  // Relationships
  public function carModel() {
    return $this->hasOne('App\Models\CarModel');
  }

}