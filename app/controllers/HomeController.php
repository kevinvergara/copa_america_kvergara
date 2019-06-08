<?php session_start();

class HomeController extends BaseController {

    public function __construct(){
        //Helper::sesionload();
    }

    public function getIndex(){

    	$id_usuarios = Sysuserperfilesmodel::where("fkid_perfil",19)->lists("fkid_usuario");

		$apostadores = Sysusermodel::whereIn("id",$id_usuarios)->get();

        $perfiles = array_column($_SESSION['DATA_USER']["perfiles"],"fkid_perfil");

        $puntajes = [];

        foreach($apostadores as $apostador){
            $puntaje = 0;
            $bono = 0;

            //calculo multiplicador
            $multiplicador = 1;
            foreach (Maxiapuestum::where("idelegido_resultado","<>","")->where("idelegido_resultado","<>","null")->get() as $maxiApuesta) {
              $maxiapuestas_usuario = Apuestamaxi::where("iduser",$apostador->id)->where("idmaxiapuesta",$maxiApuesta->id)->where("idelegido","<>","")->where("idelegido","<>","null")->first();
              if(isset($maxiapuestas_usuario->id)){
                if($maxiapuestas_usuario->idelegido == $maxiApuesta->idelegido_resultado){
                  $multiplicador = $multiplicador + 0.1;
                }
              }
            }

            $apuestas = Apuesta::where("iduser",$apostador->id)->orderBy("updated_at","DESC")->get();
            if(isset($apuestas->first()->id)){

                foreach ($apuestas as $key => $apuesta) {
                    $puntaje_obj = $apuesta->getpuntaje;

                    if(isset($puntaje_obj->id)){
                        $puntaje = $puntaje + $puntaje_obj->puntaje;
                        $bono = $bono + $puntaje_obj->bono;
                    }
                }
            }
            $puntajes["u-$apostador->id"] = ($bono + $puntaje)*$multiplicador;
        }

        array_multisort($puntajes, SORT_DESC);
        
        if(count($puntajes) >= 3){
            $primer = explode('-',array_keys($puntajes)[0]);
            $primer = $primer[1];
            $primer_puntaje = array_values($puntajes)[0];

            $segundo = explode('-',array_keys($puntajes)[1]);
            $segundo = $segundo[1];
            $segundo_puntaje = array_values($puntajes)[1];

            $tercero = explode('-',array_keys($puntajes)[2]);
            $tercero = $tercero[1];
            $tercero_puntaje = array_values($puntajes)[2];
            
            $apostadores = Sysusermodel::whereIn("id",$id_usuarios)->whereNotIn('id',array($primer,$segundo,$tercero))->get();

            $primero = array("usuario" => Sysusermodel::find($primer), "puntaje" => $primer_puntaje);

            $segundo = array("usuario" => Sysusermodel::find($segundo), "puntaje" => $segundo_puntaje);

            $tercero = array("usuario" => Sysusermodel::find($tercero), "puntaje" => $tercero_puntaje);
        }

        return View::make('home.index',compact('apostadores','primero','segundo','tercero'));

    }
}