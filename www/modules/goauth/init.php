<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Developer: Roquie
 * DateTime: 28.08.13 22:27
 * Current file name: init.php
 * 
 * All rights reserved (c)
 */


Route::set('googleapi.auth', 'admin/auth(/<action>)')
    ->defaults(array(
        'directory'  => 'Goauth',
        'controller' => 'Auth',
    ));


