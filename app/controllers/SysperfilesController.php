<?php //Route::resource('sysperfiles','SysperfilesController');  <--agregar a routes.php
class SysperfilesController extends \BaseController {

    function index(){
        $data=array();
        $data['sys_perfiles'] = Sysperfilesmodel::where('DELETED','0')->get();
        return View::make('sys_perfiles.index',$data);
    }

    function create(){

        return View::make('sys_perfiles.add');

    }

    function store(){

        $data = Input::all();
        Sysperfilesmodel::create($data);
        return Redirect::route('sysperfiles.index');


    }

    function edit($id){

        $sys_perfiles = Sysperfilesmodel::find($id);
        return View::make('sys_perfiles.edit', compact('sys_perfiles'));
    }


    function update(){

        $sys_perfiles =sysperfilesmodel ::find($_POST["ID"]);
        $sys_perfiles->PERFILES_NOMBRE=  strtoupper(Input::get('PERFILES_NOMBRE'));
        $sys_perfiles->ESTADO_REGISTRO=  Input::get('ESTADO_REGISTRO');

        $sys_perfiles->save();
        return Redirect::to('sysperfiles');

    }

    function destroy(){

        $sys_perfiles =sysperfilesmodel ::find($_POST["ID"]);
        $sys_perfiles ->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('sysperfiles');

    }

    public function eliminar($id){

        DB::table('sys_perfiles')
            ->where('ID', $id)
            ->update(
                array(
                    'DELETED' => 1,
                )
            );
        return Redirect::to('sysperfiles');
    }
}