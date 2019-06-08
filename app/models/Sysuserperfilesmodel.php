<?php
class Sysuserperfilesmodel  extends \Eloquent
{
    protected $table='sys_userperfiles';

    public static $rules = [

    ];

    protected $fillable = [
        "fkid_usuario",
        "fkid_perfil",
        "deleted"
    ];

    protected $primaryKey = 'id';

}
?>