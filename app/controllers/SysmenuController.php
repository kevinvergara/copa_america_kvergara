<?php //Route::resource('sysmenu','SysmenuController');  <--agregar a routes.php
class SysmenuController extends \BaseController {


    function index(){

        $data=array();
        $data['sys_menu'] = Sysmenumodel::where("DELETED","0")->get();
        return View::make('sys_menu.index',$data);
    }

    function create(){

        return View::make('sys_menu.add');

    }

    function store(){

        $data = Input::all();
        Sysmenumodel::create($data);
        return Redirect::route('sysmenu.index');


    }

    function edit($id){

        $sys_menu = Sysmenumodel::find($id);
        return View::make('sys_menu.edit', compact('sys_menu'));
    }


    function update(){

        $sys_menu =Sysmenumodel ::find($_POST["ID"]);
        $sys_menu->MENU_TITULO=  Input::get('MENU_TITULO');
        $sys_menu->MENU_ACCION=  Input::get('MENU_ACCION');
        $sys_menu->MENU_ORDEN=  Input::get('MENU_ORDEN');
        $sys_menu->ID_USUARIO=  Input::get('ID_USUARIO');
        $sys_menu->ESTADO_REGISTRO=  Input::get('ESTADO_REGISTRO');
        $sys_menu->MENU_ICON=  Input::get('MENU_ICON');
        $sys_menu->save();
        return Redirect::to('sysmenu');

    }

    function destroy(){

        $sys_menu =sysmenumodel ::find($_POST["ID"]);
        $sys_menu ->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('sysmenu');

    }

    public function eliminar($id){

        DB::table('sys_menu')
            ->where('ID', $id)
            ->update(
                array(
                    'DELETED' => 1,
                )
            );
        return Redirect::to('sysmenu');
    }
}