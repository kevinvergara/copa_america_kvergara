<?php
/*
 * " When the night wind softly blows through my open window
Then I start to remember the girl that brought me joy " - Deep Purple
 */

use Illuminate\Database\Eloquent\ModelNotFoundException;

class LoginController extends BaseController {

    protected $layout = 'layouts.login';

    public function getIndex(){

        return Redirect::to('home');
    }

    public function postIndex(){

        $data = array();

        $us = Sysusermodel::setsendUser(strtolower($_POST["username"]),crypt(strtolower($_POST['password']),'workmate'));

        if($us != "error"){

            $perfiles = array_column($us["perfiles"],"fkid_perfil");

            if (isset($us["usuario"])){

                $menu =Sysmenumodel::setmenuUser(strtolower($_POST["username"]),crypt(strtolower($_POST['password']),'workmate'));

                $SUBMENUS=array();

                foreach ($menu as $menus){

                    //$submenu =  Syssubmenumodel::setbyfkid($menus->id);
                    $submenu =  Syssubmenumodel::setbyfkid_perfil($menus->id, $perfiles);

                    if($submenu->count()>0){
                        $SUBMENUS[]=$submenu;
                    }
                }

                $AGLO=array();
                $cont=0;

                foreach($SUBMENUS as $sub){

                    foreach( $sub as $suf){

                        $SUBMENU_FINAL[$cont]=$suf;
                        $cont++;
                    }
                }

                $_SESSION["DATA_USER"]=	$us;
                $_SESSION["DATA_MENU"]= $menu;
                $_SESSION["DATA_SUBMENU"]= $SUBMENU_FINAL;
                $_SESSION["CREATED"]= time();

                if(Sysusermodel::find($_SESSION['DATA_USER']["usuario"]->id)->cambio_password == 1){
                    return Redirect::to('changepassword');
                }else{
                    return Redirect::to('home');
                }
            }else{

                $data=array();
                $data["MENSAJE"]=0;

                return View::make('login.index',$data);
            }
        }else{

            $data=array();
            $data["MENSAJE"]=0;

            return View::make('login.index',$data);
        }
    }

    //todo formulario requiere un get y un post (para muestra y tratamiento del mismo)

    public function getAdd(){

        if(!isset($_SESSION['data_user_etamkrow'])){

            return View::make('login.index');
        }else{

            return Redirect::to('home/index');
        }
    }

    public function postAdd(){

        //ingresa como array lops datos del formulario
        $dataForm=Input::all();
        //validaciones de laravel 
        $reglas=array(
            'usuario'=>'required|min:5',
            'password'=>'required|min:5'
        );
        //manejo de errores de laravel  anivel de formulario
        $error=array(
            'required'=>' Error: Campo requerido el campo',
            'min'=>' Error: la clave o password deben tener mínimo 5 caracteres',
        );
        //funcion para validaciones
        $validar= Validator::make($dataForm,$reglas,$error);
        //si las validaciones no son correctas te envia de vuelta a login con errores de validacion

        if($validar->fails()){

            return Redirect::back()->withErrors($validar);
        }else{
            //creo mi consulta
            //first on fail genera una pagina 404 en caso de no encontrar registro
            $datos=ProyProyectoUsuario::where('user_usuario', '=', $_POST['usuario'])
                ->where('password_usuario', '=', $_POST['password'])
                ->leftjoin('proy_proyecto','proy_proyecto.id_proyecto','=','fkid_proyecto')
                ->leftjoin('sys_usuario','sys_usuario.id_usuario','=','fkid_usuario')
                ->leftjoin('sys_perfiles','sys_perfiles.id_perfiles','=','sys_usuario.fkid_perfiles')
                ->firstOrFail(
                    App::error(function(ModelNotFoundException $e)
                    {
                        return Response::make('Not Found', 404);
                    }));
            //creo un array de credenciales con datos de sesion (session laravel no permite arrayde datos )
            $credencial=array(
                'idProyecto' =>$datos['id_proyecto'],
                'nombreProyecto' =>$datos['nombre_proyecto'],
                'idUsuario'=>$datos['id_usuario'],
                'userUsuario'=>$datos['user_usuario'],
                'idPerfiles'=>$datos['id_perfiles'],
                'descripcionPerfil'=>$datos['descripcion_perfil'],
                'readPerfil'=>$datos['read_perfil'],
                'writePerfil'=>$datos['write_perfil'],
                'updatePerfil'=>$datos['update_perfil'],
                'deletePerfil'=>$datos['delete_perfil'],
                'uploadPerfil'=>$datos['upload_perfil']);
            //creo session y mando a home para evaluar
            $_SESSION['data_user_etamkrow'] =  $credencial;

            Helper::log_session(date('Y-m-d H:i:s'),
                $_SESSION['data_user_etamkrow']['idProyecto'],
                $_SESSION['data_user_etamkrow']['nombreProyecto'],
                $_SESSION['data_user_etamkrow']['idUsuario'],
                $_SESSION['data_user_etamkrow']['userUsuario'],
                'INI');

            return Redirect::to('home/index');
        }
    }

    public function RegistrarLogin($tipo,$id_afectados){

        $data = array();

        if(isset($_SESSION["DATA_USER"])){
            $usuario = $_SESSION["DATA_USER"]["usuario"]->usuario_user;
            $id_user = $_SESSION["DATA_USER"]["usuario"]->id;

            $data["id_user"] = $id_user;
            $data["user"] = $usuario;
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        $navegador = $_SERVER['HTTP_USER_AGENT'];

        $data["ip_user"] = $ip;
        $data["navegador"] = $navegador;
        $data["tipo_registro"] = $tipo;
        $data["id_afectados"] = $id_afectados;

        LogLogin::create($data);
    }

}