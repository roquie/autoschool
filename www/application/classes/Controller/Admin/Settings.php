<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 * Copyright: Roquie0
 * License: LGPL
 * Created: 2013 year
 *
 * */

class Controller_Admin_Settings extends Controller_Ajax_Admin
{

   /* public function action_smtp()
    {
        if (!Valid::email($this->request->post()['login'], true)) {
            $this->ajax_msg('Введите email правильно', 'error');
            exit;
        }
        $str = serialize($this->request->post());
        $result = Model::factory('Settings')
                       ->upd(array('name', 'smtp'), array('value', $str));

        if ($result)
            $this->ajax_msg('SMTP сохранен');
         else
            $this->ajax_msg('Ошибка', 'error');
    }

    public function action_noSmtp()
    {
        $str = serialize($this->request->post());
        $result = Model::factory('Settings')
            ->upd(array('name', 'smtp'), array('value', 0));

        if ($result)
            $this->ajax_msg('SMTP убран');
        else
            $this->ajax_msg('Ошибка', 'error');
    }*/



}