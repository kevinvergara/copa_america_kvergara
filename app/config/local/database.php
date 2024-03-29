<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

    'default' => 'mysql',
    
    'migrations' => 'migrations',

    'connections' => array(

        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'wm_mundialero',
            'username'  => 'root',
            'password'  => 'kevin123',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),

        'mongodb' => array(
            'driver'   => 'mongodb',
            'host'     => 'localhost',
            'port'     => '27017',
            'database' => 'acred_divisiones',
            'username' => '',
            'password' => ''
        ),

    ),
    'redis' => array(
 
        'cluster' => false, //publish won't work when set to true
 
        'default' => array(
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 0,
        ),
 
    ),

);