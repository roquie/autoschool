<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_National extends Controller_Admin
{

    public function before()
    {
        parent::before();

    }

    public function action_create()
    {
        Request::factory('func/crud/create')->post(
            array(
                 'table_name' => 'Nationality',
                 'data'       => $this->request->post('data')
            )
        )->execute();
    }

    public function action_read()
    {
        $post = $this->request->post('data');
        Request::factory('func/crud/read')->post(
            array(
                 'table_name' => 'Nationality',
                 'id'         => $post['id']
            )
        )->execute();
    }

    public function action_edit()
    {
        $post = $this->request->post('data');
        Request::factory('func/crud/update')->post(
            array(
                 'table_name' => 'Nationality',
                 'id' => $post['id'],
                 'data' => $post
            )
        )->execute();
    }

    public function action_delete()
    {
        $post = $this->request->post('data');
        Request::factory('func/crud/delete')->post(
            array(
                 'table_name' => 'Nationality',
                 'id' => $post['id']
            )
        )->execute();
    }


}