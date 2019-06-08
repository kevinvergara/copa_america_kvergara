<?php
//cuando creas un helper debe modificar el composer.json 
//agregar el classmap
//"app/helpers"

/*
 * log_session tiene por objetivo respaldar los inicios y cierres de session del usuario 
 * log_bitacora tiene por objetivo respaldar los movimientos al interior del sistema
 */

class Helper{
    public static function doMessage() {
        $message = 'Hello';
        return $message;
    }

    public static  function invertir_fechaslash($fecha){
        if($fecha!=''){
            $fecha= implode( "/", array_reverse( preg_split( "/\D/", $fecha ) ) );
        }else{
            $fecha= "00-00-0000";
        }

        return $fecha;
    }

    public static  function invertir_fecha($fecha){
        if($fecha!=''){
            $fecha= implode( "-", array_reverse( preg_split( "/\D/", $fecha ) ) );
        }else{
            $fecha= "00-00-0000";
        }

        return $fecha;
    }

    public static function invertir_fecha_hora($fecha_ini){

        if(isset($fecha_ini)){
            $fecha =substr($fecha_ini,0,10);
            $fecha2 =substr($fecha_ini,11);
            $invert = explode("-",$fecha);
            $fecha_hora=$invert[2]."-".$invert[1]."-".$invert[0]." ".$fecha2;

        }else{

            $fecha_hora='';
        }

        return($fecha_hora);
    }


    public static function selectadd($array,$nombre,$value,$titulo,$comparacion=null,$funcionjs=null,$id=null){

        $nombre_id='';
        if($id==""){
            $nombre_id=$nombre;
        }else{
            $nombre_id=$id;
        }


        $retorno= "<select id=".$nombre_id."  name=".$nombre."  ". $funcionjs ." ><option value=''>-</option>";
        if(is_object($array)){
            foreach($array as $menu){

                if($comparacion==$menu[$value]){
                    $retorno.="<option value=".$menu[$value]."   selected='selected'>".$menu[$titulo]."</option>";
                }else{

                    $retorno.="<option value=".$menu[$value].">".$menu[$titulo]."</option>";
                }
            }

        }
        $retorno.= "</select>";

        return $retorno;

    }


    public static function selectobj($array,$nombre,$value,$titulo,$comparacion=null,$funcionjs=null,$id=null){

        $nombre_id='';
        if($id==""){
            $nombre_id=$nombre;
        }else{
            $nombre_id=$id;
        }

        $retorno= "<select id=".$nombre_id."  name=".$nombre."  ". $funcionjs ." ><option value=''>-</option>";
        //if(is_object($array)){
        foreach($array as $menu){

            if($comparacion==$menu->$value){
                $retorno.="<option value=".$menu->$value." selected='selected'>".$menu->$titulo."</option>";
            }else{
                $retorno.="<option value=".$menu->$value.">".$menu->$titulo."</option>";
            }
        }
        //}
        $retorno.= "</select>";

        return $retorno;

    }

    public static function ConvierteRut($rut){
        $nuevoRut= str_replace('.','',$rut);
        $nuevoRut= substr($nuevoRut, 0,strlen($nuevoRut)- 2 );
        $nuevoDv=  substr($rut, strlen($rut)-1);

        $new=array($nuevoRut,$nuevoDv);
        return $new;
    }


    public static function con_guion($url)
    {
        $url = strtolower($url);
        //Rememplazamos caracteres especiales latinos
        $find = array('á','é','í','ó','ú','ñ');
        $repl = array('a','e','i','o','u','n');
        $url = str_replace($find,$repl,$url);
        // Añaadimos los guiones
        $find = array(' ', '&', '\r\n', '\n', '+');
        $url = str_replace ($find, '-', $url);
        // Eliminamos y Reemplazamos demás caracteres especiales
        $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
        $repl = array('', '-', '');
        $url = preg_replace ($find, $repl, $url);
        //$palabra=trim($palabra);
        //$palabra=str_replace(" ","-",$palabra);
        return $url;
    }

    public static function log_session($fechaHora,$idProy,$proy,$idUser,$user,$estado){
        //Ejemplo aprenderaprogramar.com, archivo escribir.php
        $fecha=date("Ymd");
        $log=  $fecha.$idProy.$proy.$idUser.$user.".log" ;

        if (file_exists( $log.".log")) {
            $file = fopen($log.".log", "a");

            fwrite($file, $fechaHora.';'.$idProy.';'.$proy.';'.$idUser.';'.$user.';'.$estado . PHP_EOL);

            fclose($file);
        } else {
            $file = fopen( $log.".log", "w");

            fwrite($file, $fechaHora.';'.$idProy.';'.$proy.';'.$idUser.';'.$user.';'.$estado . PHP_EOL);

            fclose($file);
        }
    }

    public static function log_bitacora(){

    }

    public static function sesionload(){

        if(! isset($_SESSION["DATA_USER"]["usuario"]->id)){
            echo "<script>
             alert('La sesion ha expirado, inicie session otra vez...');             
             window.location.href=('".url()."');</script>";
        }
    }

    public static function obtener_rutficticio($_rol) {
        /* Bonus: remuevo los ceros del comienzo. */
        while($_rol[0] == "0") {
            $_rol = substr($_rol, 1);
        }
        $factor = 2;
        $suma = 0;
        for($i = strlen($_rol) - 1; $i >= 0; $i--) {
            $suma += $factor * $_rol[$i];
            $factor = $factor % 7 == 0 ? 2 : $factor + 1;
        }
        $dv = 11 - $suma % 11;
        /* Por alguna razón me daba que 11 % 11 = 11. Esto lo resuelve. */
        $dv = $dv == 11 ? 0 : ($dv == 10 ? "K" : $dv);

        $existe = PrsPersonas::where('rut_ficticio',$_rol . "-" . $dv)->count();

        if($existe == 0){
            return $_rol . "-" . $dv;
        }else{
            return Helper::obtener_rutficticio(mt_rand(10000000,99999999));
        }


    }

}