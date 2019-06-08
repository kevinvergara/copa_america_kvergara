<?php
class LogLogin  extends \Eloquent
{
    protected $table='log_login';

    public static $rules = [

    ];

    protected $fillable = [
        "ip_user",
        "id_user",
        "user",
        "navegador",
        "tipo_registro",
        "id_afectados",
    ];

    protected $primaryKey = 'id';

}
?>