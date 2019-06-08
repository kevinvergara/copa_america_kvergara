<?php
class Proyproyectosmodel  extends \Eloquent
{
    protected $table='proy_proyectos';

    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [	
        "etiqueta_proyectos",
        "nombre_proyectos",
        "sesion",
        "estado_registro",
        "created_at",
        "updated_at",
        "activo"
    ];

    protected $primaryKey = 'id';
    // public $timestamps = false; //create_at   y  update_at desabilitados



    public static function getProyectosSesion($id=null){

        $query=(" SELECT 
        proy.ID,
        proy.ETIQUETA_PROYECTOS
        FROM sys_userproyectos usproy
        LEFT JOIN proy_proyectos proy on (proy.ID=usproy.FKID_PROYECTOS)
        WHERE usproy.FKID_USER= ? ");

        $proySession = DB::select($query, array($id));

        return $proySession;

    }

}