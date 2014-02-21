<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'default' => array
    (
        'type'       => 'MySQL',
        'connection' => array(
            'hostname'   => 'localhost',
            'username'   => 'melnik5g_ampt',    //zxchg gj
            'password'   => 'qweasdzxc',
            'persistent' => FALSE,
            'database'   => 'melnik5g_ampt',
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