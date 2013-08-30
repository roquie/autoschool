<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Developer: Roquie
 * DateTime: 28.08.13 22:27
 * Current file name: init.php
 * 
 * All rights reserved (c)
 */
require 'vendor/googleapi/src/Google_Client.php';
require 'vendor/googleapi/src/contrib/Google_DriveService.php';
require 'vendor/googleapi/src/contrib/Google_Oauth2Service.php';

//require Kohana::find_file('vendor', 'googleapi/src/Google_Client', EXT); чет искал искал недоискался он


Route::set('googleapi.auth', 'auth(/<action>)')
    ->defaults(array(
        'directory'  => 'GoogleAPI',
        'controller' => 'Auth',

    ));
