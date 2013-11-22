<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_MainPage extends Controller_Ajax_Admin
{

    public function action_getInfoNoApproved()
    {
        $id = $this->request->param('id');
        $result = Model::factory('Users')->allInfoNoApproved($id);

        $this->ajax_data($result);
    }

  /*  public function action_get_user()
    {
        $id = $this->request->param('id');

        $statement = Model::factory('Statements')->getBy('user_id', $id);

        $this->ajax_data($statement->as_array());

    }*/

    /**
     * Возвращает страницу с данными юзера
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
        $data = $this->request->param('id');
        $arr = explode('-',$data);
        Model::factory('Users')->change_status((int)$arr[0], (int)$arr[1]);
        $this->ajax_msg('Статус изменен');
    }




}
