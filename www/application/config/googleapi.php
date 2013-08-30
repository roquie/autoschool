<?php defined('SYSPATH') or die('No direct script access');
return array(
    'app_name' => 'MPT Autoschool',

    'client_id' => '1064636737871-4asm4jhp13cd56lqq8h1fn2174irkfb3.apps.googleusercontent.com',
    'client_secret' => 'KVbrfm0DecnWnwoiv_P8AviT',
    'dev_key' => 'AIzaSyCvaaVlh19zKU_HEkGwiVpSamEPx687b0s',

    'redirect_uri' => URL::site('/auth/google'),
    'none_avatar_img' => URL::site('admin/img/photo.jpg'),

    'scopes' => array(
        'https://www.googleapis.com/auth/userinfo.email',
        'https://www.googleapis.com/auth/userinfo.profile',
        'https://www.googleapis.com/auth/drive',
    ),


);