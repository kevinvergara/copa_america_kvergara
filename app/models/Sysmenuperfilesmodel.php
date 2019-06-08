<?php
class Sysmenuperfilesmodel  extends \Eloquent
{
    protected $table='sys_menu_perfiles';

    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [
        "fkid_menu",
        "fkid_perfiles",
        "estado_registro",
        "created_at",
        "updated_at",
        "deleted"
    ];

    protected $primaryKey = 'id';

    public static function setPerfilesConDetalle(){
        $query=("
		 SELECT 
		sys_menu.MENU_TITULO,
		sys_perfiles.PERFILES_NOMBRE,
		sys_menu_perfiles.FKID_MENU,
		sys_menu_perfiles.FKID_PERFILES,
		sys_menu_perfiles.ESTADO_REGISTRO,
		sys_menu_perfiles.created_at,
		sys_menu_perfiles.updated_at,
		sys_menu_perfiles.ID
		FROM
		sys_menu_perfiles
		INNER JOIN sys_perfiles ON (sys_menu_perfiles.FKID_PERFILES = sys_perfiles.ID)
		INNER JOIN sys_menu ON (sys_menu_perfiles.FKID_MENU = sys_menu.ID)
		WHERE sys_menu_perfiles.DELETED = 0");

        $results = DB::select($query);
        return $results;
    }

}