<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 * Copyright: Roquie0
 * License: LGPL
 * Created: 2013 year
 *
 * */

class Controller_Admin_Settings extends Controller_Admin
{

    public function action_index()
    {
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        $this->template->content = View::factory('admin/settings', array(
            'all_users' => Model::factory('Admin_User')->getUsersWithRights(),
            'googleAccount' => Model::factory('Admin_GoogleAccount')->getLastRecord(),
            'googleAccountAllRecords' => Model::factory('Admin_GoogleAccount')->getAll(),
        ));
    }


    /**
     * метод для загрузки автокомплита
     * @type ajax
     * */
    public function action_autocomplete()
    {
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();
        $this->auto_render = false;
        if (Request::initial()->is_ajax()) {
            $arr = array();
            $emails = Model::factory('Admin_User')->getAllEmails();

            foreach ($emails as $email) {
                $arr[] = $email->email;
            }

            echo json_encode(array(
                'source' => $arr
            ));
        } else {
            throw new HTTP_Exception_404();
        }

    }


    /**
     *
     * @type ajax
     * */
    public function action_selectUser()
    {
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();
        $this->auto_render = false;
        if (Request::initial()->is_ajax()) {
            $userData = Model::factory('Admin_User')->get_email(Arr::get($_POST, 'email'));

            $data = array(
                'id'         => $userData['id'],
                'first_name' => $userData['first_name'],
                'last_name'  => $userData['last_name'],
                'email'      => $userData['email'],
            );

            echo json_encode(array(
                'status' => 'success', //error or info
                'msg' => $data
            ));

        } else {
            throw new HTTP_Exception_404();
        }
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
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();
        $this->auto_render = false;
        if (Request::initial()->is_ajax()) {

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

        } else {
            throw new HTTP_Exception_404();
        }

    }

    /**
     *
     * @type ajax
     * */
    public function action_newUser()
    {
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();
        $this->auto_render = false;
        if (Request::initial()->is_ajax()) {
            $checkEmailOne = Model::factory('Admin_User')->getOneEmail(Arr::get($_POST, 'email'));
            $checkEmailTwo = Model::factory('Admin_PreReg')->getOneEmail(Arr::get($_POST, 'email'));

            if (empty($checkEmailOne['email']) && empty($checkEmailTwo['email'])) {


                Model::factory('Admin_PreReg')->addPreRegUser(array(
                    'email' => Arr::get($_POST, 'email')
                ));

                $response = array(
                    'status' => 'success', //error or info
                    'msg'    => 'Пользователь успешно добавлен'
                );
                echo json_encode($response);

            } else {

                $response = array(
                    'status' => 'error', //error or info
                    'msg'    => 'Такой пользователь уже существует'
                );
                echo json_encode($response);
            }
        } else {
            throw new HTTP_Exception_404();
        }
    }

    /**
     * Удаление пользователя
     * Получаемые данные:
     *
     * id: $_POST['id']
     */

    public function action_delUser()
    {
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();
        $this->auto_render = false;
        if (Request::initial()->is_ajax()) {

            $id = Arr::get($_POST, 'id');
            Model::factory('Admin_User')->deleteUser($id);
            echo json_encode(array(
                'status' => 'success', //error or info
                'msg'    => $id
            ));

        } else {
            throw new HTTP_Exception_404();
        }
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
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();
        $this->auto_render = false;
        if (Request::initial()->is_ajax()) {

            Model::factory('Admin_GoogleAccount')->addGoogleAccount(array(
                'login' => Security::xss_clean(Arr::get($_POST, 'login')),
                'password' => Security::xss_clean(Arr::get($_POST, 'password')),
                'time' => date('H:i'), // must use Date helper, or -> GOVNO-code!
                'date' => date('Y-m-d')
            ));

            echo json_encode(array(
                'status' => 'success', //error or info
                'msg'    => 'Аккаунт назначен главным'
            ));

        } else {
            throw new HTTP_Exception_404();
        }
    }


}