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

        try
        {
            $user = ORM::factory('Users', $arr[0]);
            $user->status = (int)$arr[1];
            $user->save();
            $this->ajax_msg('Статус изменен');
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg($errors, 'error');
        }
    }






}
