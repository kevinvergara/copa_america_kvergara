<?php
class Sysperfilesmodel  extends \Eloquent
{
    protected $table='sys_perfiles';

    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [	"PERFILES_NOMBRE",
        "ESTADO_REGISTRO"
        /*,
        "create_at",
        "update_at",
        */];

    protected $primaryKey = 'ID';
    public $timestamps = false; //create_at   y  update_at desabilitados
}