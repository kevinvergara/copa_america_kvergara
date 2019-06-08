<?php

class Fase extends \Eloquent {

	protected $table='fases';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ["descripcion", "fecha_inicio", "fecha_termino", "cantpartidos"];

	protected $primaryKey = 'id';

}