<?php defined('SYSPATH') OR die('No direct script access.');

class Security extends Kohana_Security
{
    /**
     * добавил свой метод, изза того что мне потом лень делать проверку isset($csrf)
     * @param $token
     * @return bool
     */
    public static function is_token(&$token)
    {
        return isset($token) ? Security::token() === $token : false;
    }
}
