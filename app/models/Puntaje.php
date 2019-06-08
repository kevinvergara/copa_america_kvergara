<?php

class Puntaje extends \Eloquent {
	protected $table='puntajes';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'idapuesta',
		'puntaje',
		'bono'
	];
	
	protected $primaryKey = 'id';
}