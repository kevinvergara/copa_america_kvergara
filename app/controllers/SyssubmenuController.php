<?php //Route::resource('syssubmenu','SyssubmenuController');  <--agregar a routes.php
class SyssubmenuController extends \BaseController {


    function index(){
        $data=array();
        $data['sys_submenu'] = Syssubmenumodel::where("DELETED","0")->get();
        return View::make('sys_submenu.index',$data);
    }

    function create(){
        $data=array();
        $data['MENUS'] = Sysmenumodel::all();
        return View::make('sys_submenu.add',$data);
    }

    function store(){

        $data = Input::all();
        Syssubmenumodel::create($data);
        return Redirect::route('syssubmenu.index');
    }

    function edit($id){

        $data=array();
        $data['MENUS'] = Sysmenumodel::all();

        $data['sys_submenu'] = Syssubmenumodel::find($id);
        return View::make('sys_submenu.edit', $data);
    }

    function update(){

        $sys_submenu = Syssubmenumodel::find($_POST["ID"]);
        $sys_submenu->SUBMENU_TITULO=  Input::get('SUBMENU_TITULO');
        $sys_submenu->SUBMENU_ACCION=  Input::get('SUBMENU_ACCION');
        $sys_submenu->SUBMENU_ORDEN=  Input::get('SUBMENU_ORDEN');
        $sys_submenu->SESION_SISTEMA=  Input::get('ID_USUARIO');
        $sys_submenu->ESTADO_REGISTRO=  Input::get('ESTADO_REGISTRO');
        $sys_submenu->FKID_MENU=  Input::get('FKID_MENU');
        $sys_submenu->save();
        return Redirect::to('syssubmenu');
    }

    function destroy(){

        $sys_submenu =Syssubmenumodel::find($_POST["ID"]);
        $sys_submenu ->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('syssubmenu');
    }

    public function eliminar($id){

        DB::table('sys_submenu')
            ->where('ID', $id)
            ->update(
                array(
                    'DELETED' => 1,
                )
            );
        return Redirect::to('syssubmenu');
    }
}