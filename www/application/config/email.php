<?php defined('SYSPATH') OR die('No direct access allowed.');

$opt = Kohana::$config->load('settings')->as_array();
//if ($opt['smtp'] === 0) {
        return array(
            'driver' => 'native',
            'options' => NULL
        );
  /*  } else {
        $smtp = unserialize($opt['smtp']);
        return array(
            'driver' => 'smtp',

            'options' => array(

                'hostname' => 'smtp.'.UTF8::strstr_after($smtp['login'], '@'), // вернет smtp.gmail.com
                'username' => $smtp['login'],
                'password' => $smtp['password'],
                'port' => 25 // по дефолту
            )

        );*/
//}

