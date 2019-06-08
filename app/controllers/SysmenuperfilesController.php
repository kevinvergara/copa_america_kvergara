<?php //Route::resource('sysmenuperfiles','SysmenuperfilesController');  <--agregar a routes.php
class SysmenuperfilesController extends \BaseController {


    function index(){
        $data=array();
        $data['sys_menu_perfiles'] = Sysmenuperfilesmodel::setPerfilesConDetalle();

        return View::make('sys_menu_perfiles.index',$data);
    }

    function create(){

        $data=array();
        $data['MENUS'] = Sysmenumodel::all();
        $data['PERFILES'] = Sysperfilesmodel::all();
        return View::make('sys_menu_perfiles.add',$data);

    }

    function store(){

        $data = Input::all();
        Sysmenuperfilesmodel::create($data);
        return Redirect::route('sysmenuperfiles.index');


    }

    function edit($id){

        $data=array();
        $data['MENUS'] = Sysmenumodel::all();
        $data['PERFILES'] = Sysperfilesmodel::all();

        $data['sys_menu_perfiles'] = Sysmenuperfilesmodel::find($id);
        return View::make('sys_menu_perfiles.edit',$data);
    }


    function update(){

        $sys_menu_perfiles =sysmenuperfilesmodel ::find($_POST["ID"]);
        $sys_menu_perfiles->FKID_MENU=  Input::get('FKID_MENU');
        $sys_menu_perfiles->FKID_PERFILES=  Input::get('FKID_PERFILES');
        $sys_menu_perfiles->ESTADO_REGISTRO=  Input::get('ESTADO_REGISTRO');

        $sys_menu_perfiles->save();
        return Redirect::to('sysmenuperfiles');

    }

    function destroy(){

        $sys_menu_perfiles =sysmenuperfilesmodel ::find($_POST["ID"]);
        $sys_menu_perfiles ->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('sysmenuperfiles');

    }

    public function eliminar($id){

        DB::table('sys_menu_perfiles')
            ->where('ID', $id)
            ->update(
                array(
                    'DELETED' => 1,
                )
            );
        return Redirect::to('sysmenuperfiles');
    }
}