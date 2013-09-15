<?php defined('SYSPATH') OR die('No direct access allowed.');

    require 'vendor/twitteroauth/twitteroauth.php';

    Route::set('twitter_api', 'twitter(/<action>)')
        ->defaults(array(
            'controller' => 'twitter',
        ));

    Route::set('media_twitter', 'media-twitter(/<file>)', array('file' => '.+'))
        ->defaults(array(
            'controller' => 'twitter',
            'action'     => 'media',
            'file'       => NULL,
        ));