<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: roquie
 * Date: 20.07.13
 * Time: 0:51
 * Current file name: init.php
 * 
 * All rights reserved (c) Roquie
 */

Route::set('media_uploader', 'media(/<file>)', array('file' => '.+'))
    ->defaults(array(
        'controller' => 'uploader',
        'action'     => 'media',
        'file'       => NULL,
    ));

Route::set('uploadifive', 'uploadifive')
    ->defaults(array(
        'controller' => 'uploader',
        'action' => 'uploadifive'
    ));

Route::set('check_exists', 'check_exists')
    ->defaults(array(
        'controller' => 'uploader',
        'action' => 'check_exists'
    ));
