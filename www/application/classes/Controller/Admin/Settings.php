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

    /**
     *
     * @type ajax
     * */
    public function action_newAdmin()
    {
        $checkEmail = Model::factory('Administrator')->getBy('email', Arr::get($_POST, 'email'));

        if (!$checkEmail) {

            Model::factory('Admin_Administrator')
                   ->addRec(array(
                       'email' => Arr::get($_POST, 'email'),
                       'datetime' => date('Y-m-d H:i:s'),
                   ));

            $this->ajax_msg('Пользователь добавлен');

        } else
            $this->ajax_msg('Такой админ уже есть', 'error');

    }


    /**
     *
     */
    public function action_delAdmin()
    {

        $id = Arr::get($_POST, 'id');
        Model::factory('Administrator')->del($id);

        $this->ajax_msg($id);
        exit;
    }


}