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
     * метод для загрузки автокомплита // жалко удалять :)
     * @type ajax
     * */
   /* public function action_autocomplete()
    {
        $arr = array();
        $emails = Model::factory('Admin_User')->getAllEmails();

        foreach ($emails as $email)
            $arr[] = $email->email;


        echo json_encode(array(
            'source' => $arr
        ));
    }*/


    /**
     *
     * @type ajax
     * */
    public function action_newAdmin()
    {

        $checkEmail = Model::factory('Admin_Administrator')->getBy('email', Arr::get($_POST, 'email'));


        if (empty($checkEmail)) {

            Model::factory('Admin_Administrator')->addAdm(array(
                'email' => Arr::get($_POST, 'email'),
                'datetime' => date('Y-m-d H:i:s'),
            ));

            $this->ajax_msg('Пользователь добавлен');
        } else
            $this->ajax_msg('Такой админ уже есть', 'error');

    }

    /**
     * Удаление админа
     * Получаемые данные:
     *
     * id: $_POST['id']
     */

    public function action_delAdmin()
    {

        $id = Arr::get($_POST, 'id');
        Model::factory('Admin_Administrator')->del($id);

        $this->ajax_msg($id);
        exit;
    }

    /**
     *
     * Получаемые данные:
     *
     * login : $_POST['login']
     * pass  : $_POST['password']
     */

    /*public function action_accountGoogle()
    {

        Model::factory('Admin_GoogleAccount')->addGoogleAccount(array(
            'login' => Security::xss_clean(Arr::get($_POST, 'login')),
            'password' => Security::xss_clean(Arr::get($_POST, 'password')),
            'time' => date('H:i'), // must use Date helper, or -> GOVNO-code!
            'date' => date('Y-m-d')
        ));

        $this->ajax_msg('Аккаунт назначен главным');
    }*/


}