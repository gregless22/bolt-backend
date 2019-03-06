<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model {

	protected $fillable = [];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships
	public function carClass() {
		return $this->hasOne('App\Models\CarClass');
	}

	public function carMake() {
		return $this->belongsTo('App\Models\CarMake');
	}

	public function cars(){
		return $this->hasMany('App\Models\Car');
	}

	protected $table = "carModel";
}