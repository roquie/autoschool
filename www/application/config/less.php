<?php defined('SYSPATH') OR die('No direct script access.');

return array(
    'pathToLessFiles'  => APPPATH.'media/less/',
    'compiledOutput'  => APPPATH.'media/css/output.css',

    'pathCssForBrowser' => URL::site('css/output.css'),

    'compress' => true,
);