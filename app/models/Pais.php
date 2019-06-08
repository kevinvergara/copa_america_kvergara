<?php

class Pais extends \Eloquent {

	protected $table='pais';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		"nombre",
		"url_imagen",
		"grupo"
	];

	protected $primaryKey = 'id';

}