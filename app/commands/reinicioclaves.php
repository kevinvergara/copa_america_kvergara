<?php

use Indatus\Dispatcher\Scheduling\ScheduledCommand;
use Indatus\Dispatcher\Scheduling\Schedulable;
use Indatus\Dispatcher\Drivers\Cron\Scheduler;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class reinicioclaves extends ScheduledCommand {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'reinicioclaves:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'reinicio de claves usuario empresa contratista';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * When a command should run
     *
     * @param Scheduler $scheduler
     * @return \Indatus\Dispatcher\Scheduling\Schedulable
     */
    public function schedule(Schedulable $scheduler)
    {
        return $scheduler;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {

        $resultados = Sysusermodel::where('fkid_persona',0)->get();
        $cont = 0;
        foreach ($resultados as $key => $value) {

            $user = Sysusermodel::find($value->id);
            $user->usuario_password = crypt("123456a","workmate");
            $user->save();
            $cont = $cont + 1;

            if ($user->usuario_email != null) {
                $mensaje = "Informamos que por motivos de seguridad, su clave ha sido restaurada. <br>Su nueva clave es: '<b>123456a</b>'. <br>Puede cambiar esta contraseña, presionando su nombre en la página, y accediendo a editar perfil. <br>Nos disculpamos por las molestias.<br>";

                $dataEmail = array(
                    'usuario_mail' => $user->usuario_email,
                    'mensaje' => $mensaje
                );

                // al usuario
                try {
                    Mail::send('emails.reseteoclavesusuarios', array("mensaje_personalisado" => $dataEmail['mensaje']), function($message) use ($dataEmail) {
                        $message->to(array($dataEmail['usuario_mail']))->cc(array('victoravello@workmate.cl'))->subject('ACRED-CODELCO: reseteo contraseña usuario');
                    });

                } catch (Exception $e) {
                    Log::info("----------Error enviar mail usuario: ".$e->getMessage());
                }
            }
        }

        ////////////////////////////////////////////////////////////

        $resultados2 = Sysusermodel::where('fkid_persona','!=',0)->get();

        $cont = 0;
        foreach ($resultados2 as $key => $value) {

            $persona = PrsPersonas::find($value->fkid_persona);

            if($persona){

                if ($persona->rut_persona != null) {
                    $user = Sysusermodel::find($value->id);
                    $user->usuario_password = crypt($persona->rut_persona,"workmate");
                    $user->save();
                    $cont = $cont + 1;
                    if ($user->usuario_email != null) {
                        $mensaje = "Informamos que por motivos de seguridad, su clave ha sido restaurada. <br>Su nueva clave será su rut sin puntos, ni digito verificador: '<b>".$persona->rut_persona."</b>'. <br>Puede cambiar esta contraseña, presionando su nombre en la página, y accediendo a editar perfil. <br>Nos disculpamos por las molestias.<br>";

                        $dataEmail = array(
                            'usuario_mail' => $user->usuario_email,
                            'mensaje' => $mensaje
                        );

                        // al usuario
                        try {
                            Mail::send('emails.reseteoclavesusuarios', array("mensaje_personalisado" => $dataEmail['mensaje']), function($message) use ($dataEmail) {
                                $message->to(array($dataEmail['usuario_mail']))->cc(array('victoravello@workmate.cl'))->subject('ACRED-CODELCO: reseteo contraseña usuario');
                            });

                        } catch (Exception $e) {
                            Log::info("----------Error enviar mail usuario: ".$e->getMessage());
                        }
                    }

                } else {//no hay rut_persona

                    $user = Sysusermodel::find($value->id);
                    $user->usuario_password = crypt("123456a","workmate");
                    $user->save();
                    $cont = $cont + 1;
                    if ($user->usuario_email != null) {
                        $mensaje = "Informamos que por motivos de seguridad, su clave ha sido restaurada. <br>Su nueva clave es: '<b>123456a</b>'. <br>Puede cambiar esta contraseña, presionando su nombre en la página, y accediendo a editar perfil. <br>Nos disculpamos por las molestias.<br>";

                        $dataEmail = array(
                            'usuario_mail' => $user->usuario_email,
                            'mensaje' => $mensaje
                        );

                        // al usuario
                        try {
                            Mail::send('emails.reseteoclavesusuarios', array("mensaje_personalisado" => $dataEmail['mensaje']), function($message) use ($dataEmail) {
                                $message->to(array($dataEmail['usuario_mail']))->cc(array('victoravello@workmate.cl'))->subject('ACRED-CODELCO: reseteo contraseña usuario');
                            });

                        } catch (Exception $e) {
                            Log::info("----------Error enviar mail usuario: ".$e->getMessage());
                        }
                    }
                }
            }else{
                $user = Sysusermodel::find($value->id);
                $user->usuario_password = crypt("123456a","workmate");
                $user->save();
                $cont = $cont + 1;
                if ($user->usuario_email != null) {
                    $mensaje = "Informamos que por motivos de seguridad, su clave ha sido restaurada. <br>Su nueva clave es: '<b>123456a</b>'. <br>Puede cambiar esta contraseña, presionando su nombre en la página, y accediendo a editar perfil. <br>Nos disculpamos por las molestias.<br>";

                    $dataEmail = array(
                        'usuario_mail' => $user->usuario_email,
                        'mensaje' => $mensaje
                    );

                    // al usuario
                    try {
                        Mail::send('emails.reseteoclavesusuarios', array("mensaje_personalisado" => $dataEmail['mensaje']), function($message) use ($dataEmail) {
                            $message->to(array($dataEmail['usuario_mail']))->cc(array('victoravello@workmate.cl'))->subject('ACRED-CODELCO: reseteo contraseña usuario');
                        });

                    } catch (Exception $e) {
                        Log::info("----------Error enviar mail usuario: ".$e->getMessage());
                    }
                }
            }
        }

    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            //array('example', InputArgument::REQUIRED, 'An example argument.'),
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            //array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
        );
    }

}