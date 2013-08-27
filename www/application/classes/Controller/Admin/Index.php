<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: roquie
 * Date: 18.07.13
 * Time: 18:12
 * Current file name: index.php
 * 
 * All rights reserved (c) Roquie
 */

class Controller_Admin_Index extends Controller_Admin
{
    public function action_index()
    {
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        $this->template->content = 'тут будет статистика. Заявок, посещения сайта .. и еще что нить придумаем, т.к. на данный момент мало инфы';
    }
}