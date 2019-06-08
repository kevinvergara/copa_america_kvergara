<?php

use Indatus\Dispatcher\Scheduling\ScheduledCommand;
use Indatus\Dispatcher\Scheduling\Schedulable;
use Indatus\Dispatcher\Drivers\Cron\Scheduler;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class LimpiaTemporal extends ScheduledCommand {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'limpiatemporal:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando que limpia directorio temporal.';

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
        /*return $scheduler

                    ->minutes(1);*/

        return $scheduler->setSchedule(00, [12,00], '*', '*', '*');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {

        $dir = opendir('temporal/');
        while($f = readdir($dir)){
            if((time()-filemtime('temporal/'.$f) > 3600) and !(is_dir('temporal/'.$f)))
                unlink('temporal/'.$f);
        }
        closedir($dir);

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
