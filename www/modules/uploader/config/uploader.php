<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: roquie
 * Date: 19.07.13
 * Time: 15:35
 * Current file name: uploader.php
 * 
 * All rights reserved (c) Roquie
 */

return array(
    'upload_dir' => APPPATH.'uploads/',

    'salt' => 'unique_salt',

    'file_types' => array(
            'jpg',
            'jpeg',
            'gif',
            'png'
    ),

    'auto' => 0,
    'upload_limit' => 20,
    'file_size_limit' => 100,
    'drag-n-drop' => 1,
    'check_script' => '/check_exists',
    'upload_script' => '/uploadifive',

);