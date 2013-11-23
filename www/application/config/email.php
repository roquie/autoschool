<?php defined('SYSPATH') OR die('No direct access allowed.');

if (Kohana::$config->load('settings.smtp') == 0) {
        return array(
            'driver' => 'native',
            'options' => NULL
        );
    } else {
        $smtp = unserialize(Kohana::$config->load('settings.smtp'));
        return array(
            'driver' => 'smtp',

            'options' => array(

                //'hostname' => 'smtp.'.UTF8::strstr_after($smtp['login'], '@'), // вернет smtp.gmail.com
                'hostname' => $smtp['server'],
                'username' => $smtp['login'],
                'password' => $smtp['password'],
                'port' => $smtp['port']
            )

        );
}

