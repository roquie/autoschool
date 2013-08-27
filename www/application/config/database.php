<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'default' => array
    (
        'type'       => 'MySQL',
        'connection' => array(
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => '',
            'persistent' => FALSE,
            'database'   => 'mpt_auto',
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'profiling'    => FALSE,

    ),

    /*
         'default' => array(
        'type'       => 'pdo',
        'connection' => array(

            'dsn'        => 'mysql:host=localhost;dbname=mpt',
            'username'   => 'root',
            'password'   => '',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'profiling'    => FALSE,
   )
     */
);