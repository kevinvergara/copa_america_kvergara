<?php

class Partido extends \Eloquent {

	protected $table='partidos';
	// Add your validation rules here
	public static $rules = [
		'res_local' => 'required',
		'res_visita' => 'required'
	];

	public $timestamps = true;

	// Don't forget to fill this array
	protected $fillable = [
		"local","visita","idfase","fechahora_partido","res_local","res_visita"
	];

	protected $primaryKey = 'id';

	public function getlocal(){
        return $this->hasOne('Pais','id','local');
    }

    public function getvisita(){
        return $this->hasOne('Pais','id','visita');
    }

    public function getfase(){
        return $this->hasOne('Fase','id','idfase');
    }

}