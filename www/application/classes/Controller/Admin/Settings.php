<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 * Copyright: Roquie0
 * License: LGPL
 * Created: 2013 year
 *
 * */

class Controller_Admin_Settings extends Controller_Ajax
{


    /**
     * метод для загрузки автокомплита
     * @type ajax
     * */
    public function action_autocomplete()
    {
        $arr = array();
        $emails = Model::factory('Admin_User')->getAllEmails();

        foreach ($emails as $email)
            $arr[] = $email->email;


        echo json_encode(array(
            'source' => $arr
        ));
    }


    /**
     *
     * @type ajax
     * */
    public function action_selectUser()
    {
        $userData = Model::factory('Admin_User')->get_email(Arr::get($_POST, 'email'));

        $data = array(
            'id'         => $userData['id'],
            'first_name' => $userData['first_name'],
            'last_name'  => $userData['last_name'],
            'email'      => $userData['email'],
        );

        $this->ajax_msg($data);
    }
    /**
     * Редактирование пользователя, данные получены из формы
     * Получаемые данные:
     *
     * Имя: $_POST['name']
     * Фамилия: $_POST['fam']
     * E-mail: $_POST['email']
     * Права доступа: $_POST['right']
     * Группа: $_POST['groups']
     * id: $_POST['id']
     */
    public function action_editUser()
    {

        Model::factory('Admin_User')->updateUsers(array(
            'id' => Arr::get($_POST, 'id'),
            'first_name' => Arr::get($_POST, 'name'),
            'last_name' => Arr::get($_POST, 'fam'),
            'email' => Arr::get($_POST, 'email')
        ));

        if (Session::instance()->get('id') === Arr::get($_POST, 'id')) {
            $response = array(
                'status' => 'success', //error or info
                'msg' => 'Данные пользователя успешно обновлены',
                'is_user' => 1,

                /**
                 * Данные для обновления таблицы пользователей, это полученные данные от jQuery
                 */
                'data'   => array(
                    'id'     => Arr::get($_POST, 'id'),
                    'name'   => Arr::get($_POST, 'name'),
                    'fam'    => Arr::get($_POST, 'fam'),
                    'email'  => Arr::get($_POST, 'email'),
                ),
                'success'  => 1
            );

        } else {
            $response = array(
                'status' => 'success', //error or info
                'msg' => 'Данные пользователя успешно обновлены',
                'is_user' => 0,
                /**
                 * Данные для обновления таблицы пользователей, это полученные данные от jQuery
                 */
                'data'   => array(
                    'id'     => Arr::get($_POST, 'id'),
                    'name'   => Arr::get($_POST, 'name'),
                    'fam'    => Arr::get($_POST, 'fam'),
                    'email'  => Arr::get($_POST, 'email'),
                ),
                'success'  => 1
            );
        }
        echo json_encode($response);

    }

    /**
     *
     * @type ajax
     * */
    public function action_newUser()
    {

        $checkEmailOne = Model::factory('Admin_User')->getOneEmail(Arr::get($_POST, 'email'));
        $checkEmailTwo = Model::factory('Admin_PreReg')->getOneEmail(Arr::get($_POST, 'email'));

        if (empty($checkEmailOne['email']) && empty($checkEmailTwo['email'])) {

            Model::factory('Admin_PreReg')->addPreRegUser(array(
                'email' => Arr::get($_POST, 'email')
            ));

            $this->ajax_msg('Пользователь успешно добавлен');
        } else
            $this->ajax_msg('Такой пользователь уже существует', 'error');

    }

    /**
     * Удаление пользователя
     * Получаемые данные:
     *
     * id: $_POST['id']
     */

    public function action_delUser()
    {

        $id = Arr::get($_POST, 'id');
        Model::factory('Admin_User')->deleteUser($id);

        $this->ajax_msg($id);
    }

    /**
     *
     * Получаемые данные:
     *
     * login : $_POST['login']
     * pass  : $_POST['password']
     */

    public function action_accountGoogle()
    {

        Model::factory('Admin_GoogleAccount')->addGoogleAccount(array(
            'login' => Security::xss_clean(Arr::get($_POST, 'login')),
            'password' => Security::xss_clean(Arr::get($_POST, 'password')),
            'time' => date('H:i'), // must use Date helper, or -> GOVNO-code!
            'date' => date('Y-m-d')
        ));

        $this->ajax_msg('Аккаунт назначен главным');
    }


}