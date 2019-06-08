<?php
class Sysmenumodel  extends \Eloquent
{
    protected $table='sys_menu';

    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [
        "menu_titulo",
        "menu_accion",
        "menu_orden",
        "sesion",
        "estado_registro",
        "created_at",
        "updated_at",
    ];

    protected $primaryKey = 'id';
    public $timestamps = true; //create_at   y  update_at desabilitados

    public static function setmenuUser($user,$pass){

        $usuario = Sysusermodel::where(function($query) use  ($user){
                return $query->where("sys_user.usuario_user",$user)
                    ->orWhere("sys_user.usuario_user",$user."@codelco.cl");
            })
            ->where("usuario_password",$pass)
            ->first();

        $perfiles = Sysuserperfilesmodel::where("fkid_usuario",$usuario->id)
            ->lists("fkid_perfil");

        $results = Sysmenumodel::join("sys_menu_perfiles","sys_menu.id","=","sys_menu_perfiles.fkid_menu")
            ->join("sys_perfiles","sys_menu_perfiles.fkid_perfiles","=","sys_perfiles.id")
            ->whereIn("sys_perfiles.id",$perfiles)
            ->where("sys_menu.deleted",0)
            ->select("sys_menu.*")
            ->distinct()
            ->orderBy("sys_menu.menu_orden", "desc")
            ->get();

        /*$queries = DB::getQueryLog();
        $last_query = end($queries);

        dd($results->count());*/

        return $results;
    }
}