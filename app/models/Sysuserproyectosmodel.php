<?php
class Sysuserproyectosmodel  extends \Eloquent
{
    protected $table='sys_userproyectos';

    public static $rules = [
        // 'title' => 'required'
    ];

    protected $fillable = [	"FKID_USER",
        "FKID_PROYECTOS",
        "DEFAULT_USERPROYECTOS",
        "CREATED_AT",
        "UPDATED_AT",
        "SESION_SISTEMA",
    ];

    protected $primaryKey = 'ID';


    public static function setListaProyectosXFkidUser($parametro1,$parametro2){
        $query=(" SELECT
	ID,
	FKID_USER,
	FKID_PROYECTOS,
	DEFAULT_USERPROYECTOS,
	CREATED_AT,
	UPDATED_AT,
	SESION_SISTEMA
	FROM sys_userproyectos
	WHERE FKID_USER=? AND FKID_PROYECTOS=?");

        $results = DB::select($query, array($parametro1,$parametro2));
        return $results;
    }





}