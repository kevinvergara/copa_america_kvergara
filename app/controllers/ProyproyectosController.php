<?php //Route::resource('proyproyectos','ProyproyectosController');  <--agregar a routes.php
class ProyproyectosController extends \BaseController {
    public function postObtenerCentrocostos(){
        $centroscosto = StaCentrocosto::where('fkid_proyecto',$_POST["division"]);
        if($centroscosto->count() > 0){
            $centrocosto = StaCentrocosto::where('fkid_proyecto',$_POST["division"])->lists('nombre','id');
        }else{
            $centrocosto = array();
        }
        return Response::json(array("centroscosto" => $centrocosto));
    }
}