<?php

//cuando creas un helper debe modificar el composer.json 
//agregar el classmap
//"app/helpers"

/*
 * log_session tiene por objetivo respaldar los inicios y cierres de session del usuario 
 * log_bitacora tiene por objetivo respaldar los movimientos al interior del sistema
 */

class EnvioCorreos {

    public function aprobacionEmpresa($job, $data) {

        try{
            Mail::send('emails.aprobacionempresa', array("empresa" => $data['empresa']), function($message) use ($data) {
                $message->to($data['empresa']->replegal_email_empresa)->subject('ACRED-CODELCO: Aprobación Acreditación Empresa');
            });
        } catch (Exception $e) {

        }

        $job->delete();
    }

    public function rechazoEmpresa($job, $data) {

        try{
            Mail::send('emails.rechazoempresa', array("empresa" => $data['empresa'], "comentario" => $data['comentario']), function($message) use ($data) {
                $message->to($data['empresa']->replegal_email_empresa)->subject('ACRED-CODELCO: Rechazo Acreditación Empresa');
            });
        } catch (Exception $e) {

        }

        $job->delete();
    }

    public function aprobacionContratoEmpresa($job, $data) {

        $contrato = CntContratoempresa::find($data['contrato']['id']);

        Log::info($contrato->codigo_contratoempresa);

        try{
            Mail::send('emails.aprobacioncontrato', array("contrato" => $contrato), function($message) use ($contrato) {
                $message->to($contrato->empresa->replegal_email_empresa)->subject('ACRED-CODELCO: Aprobación Acreditación '.$contrato->tipocontrato->detalle_tipocntempresa);
            });
        } catch (Exception $e) {

        }

        $job->delete();
    }

    public function rechazoContratoEmpresa($job, $data) {

        try{
            Mail::send('emails.rechazocontrato', array("contrato" => $data['contrato'], "comentario" => $data['comentario']), function($message) use ($data) {
                $message->to($data['contrato']->empresa->replegal_email_empresa)->subject('ACRED-CODELCO: Rechazo Acreditación '.$data['contrato']->tipocontrato->detalle_tipocntempresa);
            });
        } catch (Exception $e) {

        }

        $job->delete();
    }

}