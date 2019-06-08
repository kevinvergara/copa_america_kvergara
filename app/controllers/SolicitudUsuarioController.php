<?php


class SolicitudUsuarioController extends BaseController {

    public function getIndex(){
        //  dd(Session::get('message'));

        return View::make('solicitud_usuarios.index')->with(array('message' => Session::get('message')));
    }

    public function postTraeDivision(){

        $tr = Input::get('tr');

        /*Carga en la vista  "solicitud_usuarios.index" las divisiones con checkbox*/

        $query = Proyproyectosmodel::select('id','etiqueta_proyectos')->orderBy('etiqueta_proyectos','ASC')
            ->get();

        $i=1;
        $etiqueta="";

        foreach ($query as $result ) {
            $etiqueta = $etiqueta."<td><input type='checkbox' id='division_tr$tr' name='division_tr$tr.[]'  value='$result->id'>&nbsp$result->etiqueta_proyectos&nbsp</input></td>";

            $i++;
        }
        return $etiqueta;
    }

    public function postGuardarSolicitud(){

        $empresa['id_usr_empacreditadas'] = $_POST['id_empresa'];

        $rut = $_POST['rut_empresa'];
        $dividir_rut = explode("-", $rut);
        $empresa['rut_empresa'] = str_replace('.', '', $dividir_rut[0]);
        $empresa['dv_empresa'] = $dividir_rut[1];

        $empresa['razon_social'] = $_POST['razon_social'];
        $empresa['redirect'] = $_POST['redirect'];

        $solicitantes['rut_solicitante'] = $_POST['rut_solicitante'];
        $solicitantes['nombres'] = $_POST['nombre'];
        $solicitantes['apellidos'] = $_POST['apellido'];
        $solicitantes['mail_respuesta'] = $_POST['mail_envio'];
        $solicitantes['fkid_usr_empacreditadas'] = $_POST['emp_solicitante'];

        $cambio_div['id_solicitud_div'] = $_POST['id_sol_div'];
        $cambio_div['rut'] = $_POST['rut_edit_div'];

        if ($empresa['id_usr_empacreditadas'] == "") {

            $LastInsertId = EmpEmpresa::insertarEmpresa($empresa); //Guarda empresa nueva

            $ctarut = count($solicitantes['rut_solicitante']);
            $x = 0;

            while ($x < $ctarut) {

                $solicitantes['fkid_usr_empacreditadas'][$x] = $LastInsertId;
                $x++;
            }
        }

        if ($solicitantes['rut_solicitante'] != $cambio_div['rut']) {

            $LastInsertId = UsrSolicitud::insertarUsuario($solicitantes); // Guarda Nueva solicitud

            /*  echo "<pre>";
             print_r($LastInsertId);
             echo "</pre>";
                die();   */

            $ctarut = count($solicitantes['rut_solicitante']);

            $x = 0;
            while ($x < $ctarut) {

                $x++;
                $divisiones['fkid_proy_proyectos'][$x] = $_POST['division_tr' . $x . '_'];
            }

            $ctarut = count($solicitantes['rut_solicitante']);

            $z = 0;
            while ($z != $ctarut) {
                $z++;
                for ($x = 0; $x < count($divisiones['fkid_proy_proyectos'][$z]); $x++) {     //asigna el id de la solicitud a cada division o proyecto

                    $divisiones['fkid_usr_solicitudes'][$z][$x] = $LastInsertId[$z];
                }
            }

            UsrDivision::insertarDivision($divisiones);   //Guarda las divisiones de cada solicitud de usuario

        } else {
            $x = 0;

            UsrDivision::eliminarDivisiones($cambio_div);

            $ctarut = count($solicitantes['rut_solicitante']);

            $s = 1;
            $x = 0;

            while ($x < $ctarut) {

                $x++;

                $divisiones['fkid_proy_proyectos'][$x] = $_POST['division_tr' . $x . '_'];
                $s++;
            }

            $ctarut = count($solicitantes['rut_solicitante']);

            $y = 0;
            $z = 0;

            while ($z != $ctarut) {
                $z++;
                for ($x = 0; $x < count($divisiones['fkid_proy_proyectos'][$z]); $x++) {     //asigna el id de la solicitud a cada division o proyecto

                    $divisiones['fkid_usr_solicitudes'][$z][$x] = $cambio_div['id_solicitud_div'][$y];
                    $y++;
                }
            }

            UsrDivision::insertarDivision($divisiones);   //Guarda las divisiones de cada solicitud de usuario
        }

        //   $message="Solicitud creada existosamente!";

        // return Redirect::to('solicitud_usuarios')->with('message',"Solicitud creada existosamente!");

        if(!empty($LastInsertId)){

            foreach ($LastInsertId as $solid) {

                $sol = UsrSolicitud::find($solid);

                $data = array();

                $data['id_usr_solicitudes'] = $sol->id_usr_solicitudes;
                $data['rut_solicitante'] = $sol->rut_solicitante;
                $data['nombres'] = $sol->nombres;
                $data['apellidos'] = $sol->apellidos;
                $data['mail_respuesta'] = $sol->mail_respuesta;
                $data['fkid_usr_empacreditadas'] = $sol->fkid_usr_empacreditadas;

                //$q = Queue::later(5,function($job) use($data){

                $usuario = array();

                $id = $data['id_usr_solicitudes'];
                $rut = $data['rut_solicitante'];
                $nom = $data['nombres'];
                $mail = $data['mail_respuesta'];

                // CREACION DE USUARIO Y CONTRASEÑA

                $usuario['usuario_mail'] = $mail;
                $usuario['usuario_user'] = substr($rut, 0, 5);
                $usuario['usuario_user'] = $usuario['usuario_user'] . substr($nom, 0, 5) . "_" . $id;

                $usuario['clave'] = substr($rut, 0, rand(3, 4)) . ucwords(substr($nom, 0, rand(3, 4))) . "!";

                $usuario['pass'] = crypt(strtolower($usuario['clave']), 'workmate');

                $usuario['divisiones'] = UsrDivision::where('fkid_usr_solicitudes', $data['id_usr_solicitudes'])->get();

                $save_user = new Sysusermodel();
                $save_user->usuario_user = str_replace(' ', '', $usuario['usuario_user']);
                $save_user->usuario_password = $usuario['pass'];
                $save_user->usuario_nombre = $nom;
                $save_user->usuario_apellido = $data['apellidos'];
                $save_user->usuario_email = $mail;
                $save_user->fkid_empresa = $data['fkid_usr_empacreditadas'];
                $save_user->fkid_perfiles = 2;
                $save_user->fkid_usr_solicitud = $id;
                $save_user->save();

                foreach ($usuario['divisiones'] as $usr_division) {

                    Sysuserproyectosmodel::insert(array('fkid_user' => $save_user->id, 'fkid_proyectos' => $usr_division->fkid_proy_proyectos, 'default_userproyectos' => $usr_division->fkid_proy_proyectos));
                }

                Sysuserperfilesmodel::create(array("fkid_usuario" => $save_user->id, "fkid_perfil" => 2));

                $i = 0;

                try {
                    Mail::send('emails.correousuario', array("usuario_user" => $usuario['usuario_user'], "clave" => $usuario['clave']), function ($message) use ($usuario) {
                        $message->to($usuario['usuario_mail'], 'Administrador')->subject('ACRED-CODELCO: Entrega usuario sistema acreditación.');
                    });
                } catch (Exception $e) {

                }

                UsrSolicitud::where('id_usr_solicitudes', $data['id_usr_solicitudes'])->update(array('enviada' => 1));
                /*} catch (\ErrorException $e) {

                    if ($job->attempts() >= 1) {
                        $this->logger->info(
                            'Resetting daemon after ErrorException:'. $e->getMessage()
                            . 'Job: sendOrderCompleted. Job data: ' . json_encode($data)
                        );
                        // Attempts++
                        $job->release();
                        // Kill current daemon instance
                        exit(0);
                    }
                    $this->logger->info('Catches ErrorException in sendOrderCompleted: ' . $e->getMessage());
                    throw new \RuntimeException('ErrorException in sendOrderCompleted');
                } catch (\Throwable $e) {
                    $this->logger->info(
                        'Throwable in sendOrderCompleted: '
                        . $e->getMessage()
                        . ' Data: '
                        . json_encode($data)
                    );
                    throw $e;
                }

                $job->delete();
                // stopping mail transport
                \Mail::getSwiftMailer()->getTransport()->stop();
            });*/
            }
        }else{
            return Redirect::to('solicitud_usuarios')->with(array(
                'message' => "EL usuario ingresado ya existe en nuestro sistema y se encuentra asociado a la división seleccionada.",
                'color' => "warning"
            ));
        }
        return Redirect::to('solicitud_usuarios')->with(array(
            'message' => "Solicitud creada exitosamente!, en los próximos minutos se enviará un correo a cada usuario solicitado con su nombre de usuario y contraseña asignados.",
            'color' => "success"
        ));
    }

    public function getCrearUsuarios(){

        $usuario=array();
        $emp_empresa=array();
        $i=0;

        $usuario = json_decode(json_encode(UsrSolicitud::getsolicitudes()), True);

        foreach ($usuario as $key => $user){

            $id = $user['id_usr_solicitudes'];
            $rut = $user['rut_solicitante'];
            $nom = $user['nombres'];
            $mail = $user['mail_respuesta'];

            // CREACION DE USUARIO Y CONTRASEÑA

            $usuario[$i]['usuario_user'] = substr($rut,0,5);
            $usuario[$i]['usuario_user'] = $usuario[$i]['usuario_user'].substr($nom,0,5)."_".$id;

//$usuario[$i]['usuario_user']=$usuario[$i]['usuario_user'];
            $usuario[$i]['clave']= substr($rut,0,rand(3, 4)).ucwords(substr($nom,0,rand(3, 4)))."!";

            $usuario[$i]['pass'] = crypt(strtolower($usuario[$i]['clave'],"workmate"));

            $i++;
        }

//return View::make('emails.correousuario',array("usuario_user" =>  $clave_para_mail[$i]['usuario_user'],"clave" => $clave_para_mail[$i]['clave'] ));

        Sysusermodel::insertarUser($usuario);   //Almacena las cuentas de usuario

        $i=0;
        foreach($usuario as $mails){
            /* echo "<pre>";
                 print_r($mail);
                 echo "</pre>";
                    die(); */

            try{
                Mail::send('emails.correousuario', array("usuario_user" =>  $usuario[$i]['usuario_user'],"clave" => $usuario[$i]['clave'] ), function($message) use ($mail) {
                    $message->to($mail,'Administrador')->subject('Alerta solicitudes acreditación empresas');
                });
            } catch (Exception $e) {

            }

            $i++;

            UsrSolicitud::where('id_usr_solicitudes',$mails['id_usr_solicitudes'])->update(array('enviada'=>1));
        }
    }

    public function postExisteRut(){

        $rut = $_POST['rut'];
        $ajax=array();

        $consulta = UsrSolicitud::solicitudesrut($rut);

        foreach($consulta as $datos){

            $ajax['id_usr_solicitudes']=$datos->id_usr_solicitudes;
            $ajax['rut_solicitante']=$datos->rut_solicitante;
            $ajax['nombres']=$datos->nombres;
            $ajax['apellidos']=$datos->apellidos;
            $ajax['mail_respuesta']=$datos->mail_respuesta;
            $ajax['fkid_usr_empacreditadas']=$datos->fkid_usr_empacreditadas;
            $ajax['fkid_proy_proyectos']=$datos->fkid_proy_proyectos;
            $ajax['id_usr_divisiones']=$datos->id_usr_divisiones;
        }

        return $ajax;

        /*echo "<pre>";
        print_r($consulta);
         echo "</pre>";*/
    }

    public function postExisteRutemp(){

        $rut = $_POST['RUT'];

        $empresas = EmpEmpresa::where('rut_empresa','=',$rut)->get();

        foreach ($empresas as $datos){

            $emp['id']=$datos->id;
            $emp['rut_empresa']=$datos->rut_empresa;
            $emp['dv_empresa']=$datos->dv_empresa;
            $emp['razon_social'] = $datos->razonsocial_empresa;
        }

        if(isset($emp))
        {
            return $emp;
        }else{
            $emp='NOEXISTE';
            return $emp;
        }
    }

    public function postAsignarDivision(){

        UsrDivision::eliminarDivisiones($id);

        UsrDivision::insertarDivision($divisiones);
    }

    public function postEnviarUsuarioExterno(){

        $cant = Sysusermodel::where('fkid_perfiles',7)->count();
        $password = substr(str_shuffle(MD5(microtime())), 0, 10);

        $cadena = "usertemp.".$cant++;

        $usr = Sysusermodel::create(array(
            "usuario_user" => $cadena,
            "usuario_password" => crypt($password,"workmate"),
            "usuario_nombre" => "Usuario",
            "usuario_apellido" => "Temporal",
            "usuario_email" => $_POST['email'],
            "estado_registro" => 2,
            "sesion" => 5000,
            "fkid_perfiles" => 7
        ));

        foreach(Proyproyectosmodel::all() as $p){
            Sysuserproyectosmodel::insert(array("fkid_user" => $usr->id, "fkid_proyectos" => $p->id, "default_userproyectos" => $p->id));
        }

        Sysuserperfilesmodel::create(array("fkid_usuario" => $usr->id, "fkid_perfil" => 7));

        $usr_id = $usr->id;

        //Envío de correo de confirmación
        //$q = Queue::later(5,function($job) use ($usr_id,$password)
        //{
        $usuario = Sysusermodel::find($usr_id);

        //Log::info($usuario->usuario_user);
        //Log::info($password);

        try {
            Mail::send('emails.envio_usuario_temporal', array("usuario" => $usuario, "password" => $password), function($message) use ($usuario) {
                $message->to($usuario->usuario_email)->subject('ACRED-CODELCO: Entrega usuario temporal');
            });
        } catch (Exception $e) {
            Log::info('error al enviar correo: '.$e->getMessage());
        }
        //} catch (\ErrorException $e) {
        /**
         * Workaround
         *
         */
        /*if ($job->attempts() >= 1) {
            $this->logger->info(
                'Resetting daemon after ErrorException:'. $e->getMessage()
                . 'Job: sendOrderCompleted. Job data: ' . json_encode($data)
            );
            // Attempts++
            $job->release();
            // Kill current daemon instance
            exit(0);
        }
        $this->logger->info('Catches ErrorException in sendOrderCompleted: ' . $e->getMessage());
        throw new \RuntimeException('ErrorException in sendOrderCompleted');*/
        /*} catch (\Throwable $e) {
            $this->logger->info(
                'Throwable in sendOrderCompleted: '
                . $e->getMessage()
                . ' Data: '
                . json_encode($data)
            );
            throw $e;
        }*/
        //  $job->delete();
        // stopping mail transport
        //\Mail::getSwiftMailer()->getTransport()->stop();
        //});

        return "success";
    }

}