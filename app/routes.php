<?php
header('Access-Control-Allow-Origin: *');
//Route::controller("/cntempresa","CntempresaController");

Route::controller("mongo","MongoController");

Route::get('/', function()
{
//Route::controller("/login","LoginController");
//return View::make('pages.mantencion');
    if(isset($_SESSION["DATA_USER"])){
        return View::make('home.index');
    }ELSE{
        return View::make('login.index');
    }

});

Route::get('/changepassword',function(){
    if(isset($_SESSION["DATA_USER"])){
        return View::make('login.changepassword');
        //Route::resource("changepassword","ChangepasswordController@index");

    }else{
        return View::make('login.index');
    }

});

Route::resource("changepassword/cambiar","ChangepasswordController@cambiar");

Route::get('sysuser/editarperfil','SysuserController@editarperfil');
Route::post('sysuser/editperfil','SysuserController@editperfil');
Route::controller("login","LoginController");
Route::controller("/home","HomeController");

Route::controller("/logout","LogoutController");

Route::resource('sysuser','SysuserController');
Route::resource('sysperfiles','SysperfilesController');
Route::resource('sysmenu','SysmenuController');
Route::resource('syssubmenu','SyssubmenuController');
Route::resource('sysmenuperfiles','SysmenuperfilesController');
Route::controller('proyproyectos','ProyproyectosController');

Route::get('sysperfiles/eliminar/{id}','SysperfilesController@eliminar');
Route::get('sysuser/eliminar/{id}','SysuserController@eliminar');
Route::get('sysmenu/eliminar/{id}','SysmenuController@eliminar');
Route::get('syssubmenu/eliminar/{id}','SyssubmenuController@eliminar');
Route::get('sysmenuperfiles/eliminar/{id}','SysmenuperfilesController@eliminar');

Route::resource('fases', 'FasesController');

Route::get('apuestas/create/{id}','ApuestasController@create');
Route::get('apuestas/selectfase',array('as' => 'apuestas.selectfase', 'uses' => 'ApuestasController@selectfase'));
Route::resource('apuestas', 'ApuestasController');
Route::resource('puntajes', 'PuntajesController');
Route::resource('pais', 'PaisController');
Route::get('partidos/ingreso','PartidosController@ingreso');
Route::resource('partidos', 'PartidosController');
Route::resource('apuestamaxis', 'ApuestaMaxisController');
Route::resource('maxiapuestas', 'MaxiapuestasController');

