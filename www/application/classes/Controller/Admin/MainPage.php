<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_MainPage extends Controller_Ajax_Admin
{


    /**
     * Возвращает код страницы с данными юзера
     */
    public function action_user_data()
    {
        $id = $this->request->param('id');
        $this->ajax_msg(
            View::factory('admin/mainpage/user_data', array(
            'statement' => Model::factory('Statements')->getBy('user_id', (int)$id),
            'contract' => Model::factory('Contracts')->getBy('user_id', (int)$id),
            'status' => Model::factory('Users')->getBy('id', (int)$id)->as_array()['status'],
            'user_id' => (int)$id
            ))->render()
        );
    }

    public function action_change_status()
    {
        $arr = explode('-', $this->request->param('id'));

        Request::factory('func/crud/update')->post(
            array(
                'table_name' => 'Users',
                'id' => $arr[0],
                'data' => array(
                    'status' => $arr[1]
                ),
                'only' => array(
                    'status'
                ),
                'msg' => 'Статус изменен'
            )
        )->execute();
    }









}
