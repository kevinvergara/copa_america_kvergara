<?php
class Syssubmenumodel  extends \Eloquent
{
    protected $table='sys_submenu';

    public static $rules = [

    ];

    protected $fillable = [
        "submenu_titulo",
        "submenu_accion",
        "submenu_orden",
        "sesion",
        "estado_registro",
        "fkid_menu",
        "created_at",
        "updated_at",
    ];

    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function setbyfkid($id){

        $result = Syssubmenumodel::where("sys_submenu.fkid_menu",$id)
            ->where("sys_submenu.deleted",0)
            ->select("sys_submenu.*")
            ->orderBy("sys_submenu.submenu_orden", "asc")
            ->get();

        return $result;
    }

    public static function setbyfkid_perfil($menuid, $perfiles){

        $submenus = Syssubmenumodel::where("sys_submenu.fkid_menu",$menuid)
            ->where("sys_submenu.deleted",0)
            ->lists('id');

        $submenuperfil = Syssubmenuperfilesmodel::whereIn('fkid_submenu',$submenus)
            ->whereIn('fkid_perfil',$perfiles)
            ->lists('fkid_submenu');

        $result = Syssubmenumodel::whereIn("id",$submenuperfil)
            ->where("sys_submenu.deleted",0)
            ->select("sys_submenu.*")
            ->orderBy("sys_submenu.submenu_orden", "asc")
            ->get();

        return $result;
    }

}