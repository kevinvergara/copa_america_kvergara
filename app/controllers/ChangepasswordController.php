<?php //Route::resource('sysmenu','SysmenuController');  <--agregar a routes.php
class ChangepasswordController extends \BaseController {


    public function index()
    {
        return View::make('login.changepassword');
        
    }
    
    public function cambiar()
    {
        $ps= strtolower(crypt(strtolower($_POST['passnu']),'workmate'));
        
        Sysusermodel::updatePass($_SESSION['DATA_USER']["usuario"]->id, $ps);
        
        $msj=array();
        
        $msj['MENSAJE']=1;
        
        return View::make('login.changepassword',$msj);	
        
    }

    
}