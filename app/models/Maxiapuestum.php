<?php

class Maxiapuestum extends \Eloquent {

	protected $table='maxiapuestas';

	// Add your validation rules here
	public static $rules = [
		'idelegido_resultado' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		"descripcion",
		"idelegido_resultado"];

	protected $primaryKey = 'id';
}