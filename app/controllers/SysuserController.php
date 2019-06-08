<?php //Route::resource('sysuser','SysuserController');  <--agregar a routes.php
class SysuserController extends \BaseController {

    public function __construct(){
        Helper::sesionload();

    }

    function index(){
        $data=array();
        $data['sys_user'] = Sysusermodel::where("USUARIO_DELETED",'0')->get();
        return View::make('sys_user.index',$data);
    }

    function create(){

        $data=array();

        $data['PRO'] = Proyproyectosmodel::all();
        $data['PERFILES'] = Sysperfilesmodel::all();
        $data['EMPRESAS'] = EmpEmpresa::all();

        return View::make('sys_user.add',$data);
    }

    function editarperfil(){
        $data=array();
        return View::make('sys_user.editarperfil',$data);

    }

    function store(){

        $data = Input::all();

        $datauser=array();
        $datauser["USUARIO_USER"]=strtolower($_POST['USUARIO_USER']);
        $datauser["USUARIO_PASSWORD"]=crypt(strtolower($_POST['USUARIO_PASSWORD']),'workmate');
        $datauser["USUARIO_NOMBRE"]=$_POST['USUARIO_NOMBRE'];
        $datauser["USUARIO_APELLIDO"]=$_POST['USUARIO_APELLIDO'];
        $datauser["ESTADO_REGISTRO"]='0';
        $datauser["SESION_SISTEMA"]='5000';
        $datauser["FKID_PERFILES"]=$_POST['FKID_PERFILES'];
        $datauser["usuario_email"]=$_POST['USUARIO_MAIL'];
        $datauser["FKID_EMPRESA"]=$_POST['EMPRESA_RELACION'];

        $id = DB::table('sys_user')->insertGetId($datauser);

        $id_empresas = DB::table('sys_userempresas')->insert(array('FKID_USER' => $id, 'FKID_EMPRESAS' => $datauser["FKID_EMPRESA"]));

        $dataproyectoasignado=array();
        foreach($_POST["PROYASIG"]  as $PROYECTOSASIG){
            $dataproyectoasignado["FKID_PROYECTOS"]=$PROYECTOSASIG;
            $dataproyectoasignado["FKID_USER"]=$id;
            DB::table('sys_userproyectos')->insert($dataproyectoasignado);
        }

        //ACTUALIZA REGISTRO DEFAULT
        $listaproyecto=Sysuserproyectosmodel::setListaProyectosXFkidUser($id,$_POST["PROYDEFAULT"] );
        if(isset($listaproyecto[0])){
            DB::table('sys_userproyectos')
                ->where('ID',$listaproyecto[0]->ID)
                ->update(array('DEFAULT_USERPROYECTOS' => 1));
        }else{
            $dataproyectoasignado["FKID_PROYECTOS"]=$_POST["PROYDEFAULT"] ;
            $dataproyectoasignado["FKID_USER"]=$id;
            $dataproyectoasignado["DEFAULT_USERPROYECTOS"]=1;
            DB::table('sys_userproyectos')->insert($dataproyectoasignado);
        }

        return Redirect::route('sysuser.index');
    }

    function edit($id){

        $data=array();
        $data['PERFILES'] = Sysperfilesmodel::all();
        $data['sys_user'] = Sysusermodel::find($id);

        return View::make('sys_user.edit',$data);
    }

    function update(){

        $sys_user =Sysusermodel::find($_POST["ID"]);
        $sys_user->USUARIO_USER= strtolower(Input::get('USUARIO_USER'));

        if(Input::get('USUARIO_PASSWORD')!=''){
            $sys_user->USUARIO_PASSWORD=  crypt(strtolower(Input::get('USUARIO_PASSWORD')),'workmate');
        }
        $sys_user->USUARIO_NOMBRE =  Input::get('USUARIO_NOMBRE');
        $sys_user->USUARIO_APELLIDO =  Input::get('USUARIO_APELLIDO');
        $sys_user->ESTADO_REGISTRO =  Input::get('ESTADO_REGISTRO');
        $sys_user->SESION_SISTEMA =  Input::get('SESION_SISTEMA');
        $sys_user->FKID_PERFILES =  Input::get('FKID_PERFILES');
        $sys_user->usuario_email = $_POST['USUARIO_MAIL'];

        $sys_user->save();
        return Redirect::to('sysuser');
    }

    function destroy(){

        $sys_user = Sysusermodel::find($_POST["ID"]);
        $sys_user->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('sysuser');
    }

    function editperfil(){
        //dd($_POST);

        $id_user = $_POST['ID_USUARIO'];
        $nombre = $_POST['USUARIO_NOMBRE'];
        $apellido = $_POST['USUARIO_APELLIDO'];
        $email = $_POST['USUARIO_MAIL'];
        $pass = $_POST['USUARIO_PASSWORD'];

        $sys_user =Sysusermodel::find($id_user);

        if(isset($pass) && $pass !='' && $pass !=null){
            $sys_user->USUARIO_PASSWORD=  crypt(strtolower($pass),'workmate');
        }

        $sys_user->USUARIO_NOMBRE = $nombre;
        $sys_user->USUARIO_APELLIDO = $apellido;
        $sys_user->usuario_email = $email;

        $sys_user->save();

        //dd($sys_user);

        return Redirect::to('home');
    }

    function eliminar($id){

        DB::table('sys_user')
            ->where('ID', $id)
            ->update(
                array(
                    'USUARIO_DELETED' => 1,
                )
            );
        return Redirect::to('sysuser');
    }
}
?>