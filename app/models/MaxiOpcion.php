<?php

class MaxiOpcion extends \Eloquent {

	protected $table='maxi_opcions';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		"idmaxiapuesta",
		"descripcion"
	];

}