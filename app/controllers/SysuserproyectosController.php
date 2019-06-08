<?php //Route::resource('sysuserproyectos','SysuserproyectosController');  <--agregar a routes.php
class SysuserproyectosController extends \BaseController {


    function index()
    {	$data=array();
        $data['sys_userproyectos'] = Sysuserproyectosmodel::all();
        return View::make('sys_userproyectos.index',$data);
    }

    function create()
    {

        return View::make('sys_userproyectos.add');

    }

    function store()
    {

        $data = Input::all();
        Sysuserproyectosmodel::create($data);
        return Redirect::route('sysuserproyectos.index');


    }

    function edit($id)
    {
        $sys_userproyectos = Sysuserproyectosmodel::find($id);
        return View::make('sys_userproyectos.edit', compact('sys_userproyectos'));
    }


    function update()
    {

        $sys_userproyectos =sysuserproyectosmodel ::find($_POST["ID"]);
        $sys_userproyectos->FKID_USER=  Input::get('FKID_USER');
        $sys_userproyectos->FKID_PROYECTOS=  Input::get('FKID_PROYECTOS');
        $sys_userproyectos->DEFAULT_USERPROYECTOS=  Input::get('DEFAULT_USERPROYECTOS');
        $sys_userproyectos->CREATED_AT=  Input::get('CREATED_AT');
        $sys_userproyectos->UPDATED_AT=  Input::get('UPDATED_AT');
        $sys_userproyectos->SESION_SISTEMA=  Input::get('SESION_SISTEMA');

        $sys_userproyectos->save();
        return Redirect::to('sysuserproyectos');

    }

    function destroy()
    {
        $sys_userproyectos =sysuserproyectosmodel ::find($_POST["ID"]);
        $sys_userproyectos ->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('sysuserproyectos');

    }
}