<?php

namespace App\queueclasses {

    Class IntegracionWSControlAcceso{
    
        public static function personaWSCall($job, $data) {
            
            /*************WEBSERVICE****************************/
            
            $log = WsPersonaLog::create(array(
                /*'fkid_proyecto' => $data['solicitud']->fkid_proyecto,
                'hora_enviowm' => date('Y-m-d H:i:s'),
                'fkid_acrsolicitud' => $data['solicitud']->id,
                'fkid_acrcredencial' => $data['credencial']->id,
                'fkid_estadocredencial' => $data['credencial']->fkid_estadocredenciales,
                'fkid_tipo_movimientopersona' => $data['movimientoPersona']*/
                'fkid_proyecto' => 1,
                'hora_enviowm' => date('Y-m-d H:i:s'),
                'fkid_acrsolicitud' => 1,
                'fkid_acrcredencial' => 1,
                'fkid_estadocredencial' => 1,
                'fkid_tipo_movimientopersona' => 1
                ));

            //DGM
            /*if($data['solicitud']->fkid_proyecto == 1){*/
            if(1 == 1){
                //Actualiza hora de respuesta

                $username = Config::get(App::environment().'/controlaccesoWS.DGM.user');
                $password = Config::get(App::environment().'/controlaccesoWS.DGM.password');

                $client = new SoapClient(Config::get(App::environment().'/controlaccesoWS.DGM.wsdl'), array('login' => $username, 'password' => $password));

                /*$param = array(
                            "NROTARJETA" => $data['credencial']->id, 
                            "NOMBRES" => $data['solicitud']->contrato->empleado->nombres_persona, 
                            "APELLIDOS" => $data['solicitud']->contrato->empleado->patapel_persona.' '.$data['solicitud']->contrato->empleado->matapel_persona, 
                            "RUT" => $data['solicitud']->contrato->empleado->rut_persona.$data['solicitud']->contrato->empleado->digito_verif, 
                            "RUTEMPRESA" => $data['solicitud']->contrato->contratoEmpresa->empresa->rut_empresa.$data['solicitud']->contrato->contratoEmpresa->empresa->dv_empresa, 
                            "TIPOPASE" => "PERM",
                            "SEXO" => $data['solicitud']->contrato->empleado->sexo->detalle_sexo, 
                            "OST" => $data['solicitud']->contrato->contratoEmpresa->codigo_contratoempresa, 
                            "TURNO" => $data['solicitud']->contrato->jornada->turno->detalle_turnos, 
                            "CARGO" => $data['solicitud']->contrato->cargo->categoria->detalle_categoria, 
                            "AUTORIZADOACCESO" => "NO", 
                            "AUTORIZADOCONDUCIR" => "NO", 
                            "MOTIVORECHAZO" => ""
                        );*/
                $param = array(
                            "NROTARJETA" => "00039476", 
                            "NOMBRES" => "VICTOR AVELLO", 
                            "APELLIDOS" => "EEESO", 
                            "RUT" => "170291506", 
                            "RUTEMPRESA" => "66189147", 
                            "TIPOPASE" => "PERM",
                            "SEXO" => "MASCULINO", 
                            "OST" => "345345345", 
                            "TURNO" => "7X7", 
                            "CARGO" => "PULENTO", 
                            "AUTORIZADOACCESO" => "NO", 
                            "AUTORIZADOCONDUCIR" => "NO", 
                            "MOTIVORECHAZO" => ""
                        );
                $result = $client->__soapCall('SetPersona', $param, array('uri' => 'webservice.webcontrol.cl'));

                //Actualiza hora de respuesta
                WsPersonaLog::where('id',$log->id)->update(array('hora_respuestaca' => date('Y-m-d H:i:s'),'respuesta' => $result->SetPersonaResult)); 

            }
            
            /*****************************************************************/

            $job->delete();
        }

        public function personaVisitaWSCall($job, $data) {
            
            /*************WEBSERVICE****************************/
            
            $log = WsVisitaLog::create(array(
                /*'fkid_proyecto' => $data['solicitud']->fkid_proyecto,
                'hora_enviowm' => date('Y-m-d H:i:s'),
                'fkid_acr_solicitud_pasevisita' => $data['solicitud']->id,
                'fkid_tipo_movimientopasevisita' => $data['movimientoVisita']*/
                'fkid_proyecto' => 1,
                'hora_enviowm' => date('Y-m-d H:i:s'),
                'fkid_acr_solicitud_pasevisita' => 1,
                'fkid_tipo_movimientopasevisita' => 1
                ));

            //DGM
            /*if($data['solicitud']->fkid_proyecto == 1){*/
            if(1 == 1){
                //Actualiza hora de respuesta

                $username = Config::get(App::environment().'/controlaccesoWS.DGM.user');
                $password = Config::get(App::environment().'/controlaccesoWS.DGM.password');

                $client = new SoapClient(Config::get(App::environment().'/controlaccesoWS.DGM.wsdl'), array('login' => $username, 'password' => $password));

                /*$param = array(
                            "NROTARJETA" => $data['solicitud']->id, 
                            "NOMBRES" => $data['solicitud']->persona->nombres_persona, 
                            "APELLIDOS" => $data['solicitud']->persona->patapel_persona.' '.$data['solicitud']->persona->matapel_persona, 
                            "RUT" => $data['solicitud']->persona->rut_persona.$data['solicitud']->persona->digito_verif, 
                            "RUTEMPRESA" => $data['solicitud']->empresa->rut_empresa.$data['solicitud']->empresa->dv_empresa, 
                            "TIPOPASE" => "VISITA",
                            "SEXO" => $data['solicitud']->persona->sexo->detalle_sexo, 
                            "OST" => $data['solicitud']->fkid_contratoempresa != 0 ? $data['solicitud']->contrato->codigo_contratoempresa : "" , 
                            "TURNO" => "", 
                            "CARGO" => "", 
                            "AUTORIZADOACCESO" => $data['acceso'], 
                            "AUTORIZADOCONDUCIR" => $data['conduccion'], 
                            "MOTIVORECHAZO" => ""
                        );*/
                $param = array(
                            "NROTARJETA" => "234234", 
                            "NOMBRES" => "PRUEBA", 
                            "APELLIDOS" => "TEST", 
                            "RUT" => "170291506", 
                            "RUTEMPRESA" => "111111111", 
                            "TIPOPASE" => "VISITA",
                            "SEXO" => "FEMENINO", 
                            "OST" => "", 
                            "TURNO" => "", 
                            "CARGO" => "", 
                            "AUTORIZADOACCESO" => "SI", 
                            "AUTORIZADOCONDUCIR" => "NO", 
                            "MOTIVORECHAZO" => ""
                        );
                $result = $client->__soapCall('SetPersona', $param, array('uri' => 'webservice.webcontrol.cl'));

                //Actualiza hora de respuesta
                WsVisitaLog::where('id',$log->id)->update(array('hora_respuestaca' => date('Y-m-d H:i:s'),'respuesta' => $result->SetPersonaResult)); 

            }
            
            /*****************************************************************/

            $job->delete();
        }

        public function empresaWSCall($job, $data) {
            
            /*************WEBSERVICE****************************/
            
            $log = WsEmpresaLog::create(array(
                /*hora_enviowm' => date('Y-m-d H:i:s'),
                'fkid_empresa' => $data['empresa']->id,
                'fkid_tipo_movimientopersona' => $data['movimientoEmpresa']*/
                'hora_enviowm' => date('Y-m-d H:i:s'),
                'fkid_empresa' => 1,
                'fkid_tipo_movimientopersona' => 1
                ));

            //DGM
            /*if($data['solicitud']->fkid_proyecto == 1){*/
            if(1 == 1){
                //Actualiza hora de respuesta

                $username = Config::get(App::environment().'/controlaccesoWS.DGM.user');
                $password = Config::get(App::environment().'/controlaccesoWS.DGM.password');

                $client = new SoapClient(Config::get(App::environment().'/controlaccesoWS.DGM.wsdl'), array('login' => $username, 'password' => $password));

                /*$param = array(
                            "RUTEMPRESA" => $data['empresa']->rut_empresa.$data['empresa']->dv_empresa, 
                            "ACRONIMO" => $data['empresa']->nfantasia_empresa, 
                            "RAZONSOCIAL" => $data['empresa']->razonsocial_empresa, 
                            "GIRO" => "", 
                            "ACREDITADA" => "SI", 
                            "MOTIVORECHAZO" => "",
                        );*/
                $param = array(
                            "RUTEMPRESA" => "170291506", 
                            "ACRONIMO" => "VA", 
                            "RAZONSOCIAL" => "Victor Avello", 
                            "GIRO" => "", 
                            "ACREDITADA" => "SI", 
                            "MOTIVORECHAZO" => "",
                        );
                $result = $client->__soapCall('SetEmpresa', $param, array('uri' => 'webservice.webcontrol.cl'));

                //Actualiza hora de respuesta
                WsEmpresaLog::where('id',$log->id)->update(array('hora_respuestaca' => date('Y-m-d H:i:s'),'respuesta' => $result->SetEmpresaResult)); 

            }
            
            /*****************************************************************/

            $job->delete();
        }


        

    }

}

//cuando creas un helper debe modificar el composer.json 
//agregar el classmap
//"app/helpers"

/*
 * log_session tiene por objetivo respaldar los inicios y cierres de session del usuario 
 * log_bitacora tiene por objetivo respaldar los movimientos al interior del sistema
 */

