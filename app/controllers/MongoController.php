<?php

class MongoController extends \BaseController{

    public function __construct(){
        Helper::sesionload();
    }

    function guardarEdicionSubObj($id_objeto, $nombre_campo, $dato_nuevo, $dato_antiguo, $val_edit, $fkid_tipo_edicion){
        
        try {
            $edicion_obj = MongoEdicionObjeto::find($id_objeto);

            //validar que exista una edicion anterior del mismo campo activa, si existe dejarlo en 0 
            $sub_antiguo = $edicion_obj->ediciones()->where('fkid_tipo_edicion',(int)$fkid_tipo_edicion)
                        ->where('nombre_campo',$nombre_campo)
                        ->where('active',1)
                        ->first();
            
            if($sub_antiguo){
                $sub_antiguo->active = 0;
                $sub_antiguo->save();
            }
            
            //agregar el nuevo
            $edicion_subobj = new MongoEdicionSubObjeto();
            $edicion_subobj->fkid_tipo_edicion = (int)$fkid_tipo_edicion;
            $edicion_subobj->nombre_campo = $nombre_campo;
            $edicion_subobj->dato_antiguo = $dato_antiguo;
            $edicion_subobj->dato_nuevo = $dato_nuevo;
            $edicion_subobj->fecha_edicion = date("Y-m-d H:i:s");
            $edicion_subobj->val_edit = $val_edit;
            $edicion_subobj->active = 1;

            $edicion_obj->ediciones()->save($edicion_subobj);

        } catch (Exception $e) {
            log::info($e->getMessage());
            return false;
        }

        return true;
    }

    public function postEdicionesActivas(){
        
        $objeto = MongoEdicionObjeto::where('identificador_clave',(int)$_POST['id_clave'])->where("fkid_modulo",(int)$_POST["modulo"])->first();
        $data = array();

        if($objeto){

            //se envia 1 (toma 1 y 5)
            if($_POST['tipo_edicion'] == 1){
                $tipos = array(1,5);
                $a = $objeto->ediciones()->whereIn('fkid_tipo_edicion',$tipos)->where('active',1)->get();
            }else{
                $a = $objeto->ediciones()->where('fkid_tipo_edicion',(int)$_POST['tipo_edicion'])->where('active',1)->get();
            }

            foreach ($a as $key => $sub) {
                $data[$key]['campo'] = $sub->nombre_campo;
                $data[$key]['dato_antiguo'] = $sub->dato_antiguo;
                $data[$key]['dato_nuevo'] = $sub->dato_nuevo;
            }

            return Response::json(array("result" => "success","editado" => true, "data" => $data));
        }else{
            return Response::json(array("result" => "success","editado" => false));
        }

    }
    
    public static function postCambiarActive($id_clave,$modulo,$tipo_edicion){

        try{

            $objeto = MongoEdicionObjeto::where('identificador_clave',(int)$id_clave)->where("fkid_modulo",(int)$modulo)->first();
            $data = array();

            if($objeto){

                //se envia 1 (toma 1 y 5)
                if($tipo_edicion == 1){
                    $tipos = array(1,5);
                    $a = $objeto->ediciones()->whereIn('fkid_tipo_edicion',$tipos)->where('active',1)->get();
                }else{
                    $a = $objeto->ediciones()->where('fkid_tipo_edicion',(int)$tipo_edicion)->where('active',1)->get();
                }

                foreach ($a as $key => $sub) {
                    $sub->active = 0;
                    $sub->save();
                }

                return true;
            }else{
                return false;
            }

            //guardar fila del modulo ocupado desde mysql a mongo para generar log de cambios

        } catch (Exception $e) {
            log::info($e->getMessage());
            return false;
        }

    }

    //ver si se usa
    public function postAreasPasesVista()
    {   
        $datos = "";
        try {
            $areas = $_POST["areas"];
            $areas = explode(',',$areas);

            foreach($areas as $key => $fkid_area){
                if($key == 0){
                    $datos = LicAreasLicencia::find($fkid_area)->descripcion;
                }else{
                    $datos = $datos."-".LicAreasLicencia::find($fkid_area)->descripcion;
                }
            } 

            $respuesta = true;
        } catch (Exception $e) {
            $respuesta = false;            
        }
        
        $data = array(
            "respuesta" => $respuesta,
            "datos" => strtoupper($datos)
        );

        return $data;
    }
}