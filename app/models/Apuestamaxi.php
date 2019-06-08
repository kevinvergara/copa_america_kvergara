<?php

class Apuestamaxi extends \Eloquent {

	protected $table='apuesta_maxis';

	// Add your validation rules here
	public static $rules = [
		'iduser' => 'required',
		'idmaxiapuesta' => 'required',
		'idelegido' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		"iduser",
		"idmaxiapuesta",
		"idelegido"
	];

}