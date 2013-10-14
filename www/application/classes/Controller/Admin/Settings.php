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
        $checkEmail = Model::factory('Admin_Administrator')->getBy('email', Arr::get($_POST, 'email'));

        if (!$checkEmail) {

            Model::factory('Admin_Administrator')->addRec(array(
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
        Model::factory('Admin_Administrator')->del($id);

        $this->ajax_msg($id);
        exit;
    }

    /**
     * метод необходим для smtp
     */
    /*public function action_accountGoogle()
    {

        Model::factory('Admin_GoogleAccount')->addRec(array(
            'login' => Security::xss_clean(Arr::get($_POST, 'login')),
            'password' => Security::xss_clean(Arr::get($_POST, 'password')),
            'time' => date('H:i'),
            'date' => date('Y-m-d')
        ));

        $this->ajax_msg('Аккаунт назначен главным');
    }*/


}