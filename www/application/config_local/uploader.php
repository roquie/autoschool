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

    'salt' => 'alfjkfsn478hjvn;dfg-0iwert8uruihvjksv;sro290p',

    'auto' => 0,
    'upload_limit' => 20,
    'file_size_limit' => 100000,
    'drag-n-drop' => 1,
    'check_script' => '/check_exists',
    'upload_script' => '/uploadifive',

    'file_types' => array(
        'jpg',
        'jpeg',
        'gif',
        'png',
        'bmp',
        'zip',
        'rar',
        '7z',
        'doc',
        'docx',
        'xls',
        'xlsx',
        'txt',
        'rtf',
        'ppt',
        'pptx',
        'pdf'

    )

);