<?php
class Syssubmenuperfilesmodel  extends \Eloquent
{
    protected $table='sys_submenu_perfiles';

    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [	"fkid_submenu",
        "fkid_perfil"
    ];

    protected $primaryKey = 'id';

}