<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Sysusermodel  extends \Eloquent implements UserInterface, RemindableInterface {
    use UserTrait, RemindableTrait;
    protected $table='sys_user';

    public static $rules = [

    ];

    public function scopeAuditores($query){

        return $query->where('fkid_perfiles', '=', 8);
    }

    protected $fillable = [
        "usuario_user",
        "usuario_password",
        "usuario_nombre",
        "usuario_apellido",
        "fkid_persona",
        "usuario_email",
        "estado_registro",
        "sesion",
        "fkid_perfiles",
        "fkid_usr_solicitud",
        "created_at",
        "updated_at",
    ];

    protected $primaryKey = 'id';

    public static function setsendUser($user,$pass){

        $result = array();

        $usuario = Sysusermodel::leftJoin("sys_perfiles","sys_user.fkid_perfiles","=","sys_perfiles.id")
            //->where("sys_userproyectos.default_userproyectos",1)
            ->where(function($query) use  ($user){
                return $query->where("sys_user.usuario_user",$user)
                    ->orWhere("sys_user.usuario_user",$user."@codelco.cl");
            })
            ->where("sys_user.deleted",0)
            ->where("sys_user.usuario_password",$pass)
            ->select(
                "sys_user.id",
                "sys_user.usuario_user",
                "sys_user.usuario_nombre",
                "sys_user.usuario_apellido",
                "sys_user.usuario_email",
                "sys_user.estado_registro",
                "sys_user.fkid_perfiles",
                "sys_user.fkid_empresa",
                "sys_user.fkid_persona",
                "sys_user.created_at",
                "sys_perfiles.perfiles_nombre")
            ->first();

        if(!empty($usuario)){

            $result["usuario"] = $usuario;

            $perfiles = Sysuserperfilesmodel::where("fkid_usuario",$usuario->id)
                ->get()->toArray();

            $result["perfiles"] = $perfiles;

            return $result;
        }else{
            return "error";
        }
    }

    public static function updatePass( $id = null , $ps = null ){
        Sysusermodel::where('id', '=', $id)
            ->update(array(
            'usuario_password' => $ps,
            'cambio_password' => 0));


    }

}
?>