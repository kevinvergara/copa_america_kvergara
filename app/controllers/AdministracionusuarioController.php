<?php

class AdministracionusuarioController extends BaseController {

    protected $layout = 'layouts.master';

    public function __construct(){
        Helper::sesionload();

    }

    public function getIndex()
    {
        if(isset($_SESSION['data_user_etamkrow']))
        {
            //$perfiles=array();
            //$perfiles[0]=array('amigo'=>'te gusta algo');
            $perfiles = SysPerfiles::all()->lists('descripcion_perfil','id_perfiles');
            $selected=array();

            return $this->layout->content = View::make('administracionusuario.index',compact('perfiles','selected'));
        }else{
            return View::make('login.index');
        }
    }

    public function getAdd()
    {
        if(!isset($_SESSION['data_user_etamkrow']))
        {
            return View::make('administracionusuario.index');
        }else{

            return Redirect::to('home/index');

        }
    }

    public function postAdd()
    {

    }

    public function getPersonal()
    {

        return $this->layout->content = View::make('administracionusuario.personal');

//        if($_POST){
//            $data = array();
//            $detalle = $this->input->post('FAMILIA_DETALLE');
//            if($detalle!="" || $detalle!=null){
//                $data['FAMILIA_DETALLE'] = strtoupper($detalle);
//                $this->load->model('bod_familia_model');
//                $this->bod_familia_model->insert($data);
//                redirect('bod_producto/add');
//            }else{
//                redirect('bod_producto/add');
//            }
//        }
    }


}
 

