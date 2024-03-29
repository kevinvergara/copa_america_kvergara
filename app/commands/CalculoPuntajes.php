<?php

use Indatus\Dispatcher\Scheduling\ScheduledCommand;
use Indatus\Dispatcher\Scheduling\Schedulable;
use Indatus\Dispatcher\Drivers\Cron\Scheduler;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CalculoPuntajes extends ScheduledCommand {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'calculopuntajes:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'recalculo de puntajes, en caso de error al ingresar partido de forma incorrecta';

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

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {

        $partidos = Partido::all();

        $controllerPartido = new PartidosController();

        foreach ($partidos as $key => $partido) {
            $controllerPartido->calcularPuntaje($partido->id);
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
            //array('example', InputArgument::OPTIONAL, 'An example argument.'),
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
