<?php

class Apuesta extends \Eloquent {
	protected $table='apuestas';
	// Add your validation rules here
	public static $rules = [
		'gol_local' => 'required',
		'gol_visita' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		"iduser",
		"gol_local",
		"gol_visita",
		"idpartido"
	];

	protected $primaryKey = 'id';

	public function getusuario(){
        return $this->hasOne('Sysusermodel','id','iduser');
    }

    public function getpartido(){
        return $this->hasOne('Partido','id','idpartido');
    }

    public function getpuntaje(){
        return $this->hasOne('Puntaje','idapuesta','id');
	}
	
}