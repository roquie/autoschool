<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Administrators extends Controller_Ajax_Admin
{

    /**
     *
     * @type ajax
     * */
    public function action_create()
    {
        if (!Valid::email($this->request->post('data.email'), true)) {
            $this->ajax_msg('email не верный');
            exit;
        }

        $checkEmail = Model::factory('Administrators')->getBy('email', $this->request->post('data.email'));

        if (!$checkEmail) {
            $result = Model::factory('Administrators')
                ->addRec(array(
                    'email' => $this->request->post('data.email')
                ));
            if ($result)
                $this->ajax_data(array('id' => $result, 'email' => $this->request->post('data.email')),'Пользователь добавлен');
            else
                $this->ajax_msg('ошибка бд', 'error');

        } else
            $this->ajax_msg('Такой админ уже есть', 'error');

    }


    /**
     *
     */
    public function action_delete()
    {
        $id = $this->request->param('id');
        //$result = Model::factory('Administrators')->del((int)$this->request->post('id'));
        $result = Model::factory('Administrators')->del($id);

        if ($result)
            $this->ajax_msg('Админ удален');
        else
            $this->ajax_msg('ошибка бд', 'error');
    }


}