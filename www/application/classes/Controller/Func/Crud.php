<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Func_Crud extends Controller_Ajax_Admin
{

    public function before()
    {
        parent::before();

        $this->auto_render = false;
        if(Request::initial() === Request::current())
            HTTP::redirect('/');
    }

    /*

    Request::factory('func/crud/create')->post(
            array(
                'table_name' => 'Groups',
                'data' => array(
                    'name' => 'blablabla13123'
                ),
                'msg' => 'Что за х*йню я добавляю*',
            )
        )->execute();

    */
    public function action_create()
    {
        $post = $this->request->post();
        try
        {
            ORM::factory($post['table_name'])->values($post['data'])->save();
            $this->ajax_msg(
                isset($post['msg']) ? $post['msg'] : 'Запись добавлена'
            );
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }

    }
    /*

    Request::factory('func/crud/read')->post(
            array(
                'table_name' => 'Groups',
                'id' => 5
            )
        )->execute();

    или

    Request::factory('func/crud/read')->post(
            array(
                'table_name' => 'Groups'
            )
        )->execute();

    вернет все записи

    */
    public function action_read()
    {
        $post = $this->request->post();

        if (!empty($post['id']))
            try
            {
                $result = ORM::factory($post['table_name'])->where('id', '=', $post['id'])->find()->as_array();
                $this->ajax_data($result);
            }
            catch (Exception  $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }
        else
            try
            {
                $result = ORM::factory($post['table_name'])->find_all();
                $data = array();
                foreach ($result as $value)
                    $data[] = $value->as_array();

                $this->ajax_data($data);
            }
            catch (Exception  $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }
    }
    /*

    Request::factory('func/crud/update')->post(
            array(
                'table_name' => 'Groups',
                'id' => array('user_id', 5),  --->  or 'id' => 5,
                'data' => array(
                    'name' => 'blablabla13123'
                )
            )
        )->execute();

    */
    public function action_update()
    {
        $post = $this->request->post();

        try
        {
            $u = ORM::factory(
                $post['table_name'],

                is_array($post['id'])
                    ? array($post['id'][0] => $post['id'][1])
                    : $post['id']
            );
            $u->values($post['data'],
                    isset($post['only'])
                        ? $post['only']
                        : null
            );
            $u->save();

            $this->ajax_msg(
                isset($post['msg']) ? $post['msg'] : 'Запись обновлена'
            );
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }

    }

    /*

    Request::factory('func/crud/delete')->post(
            array(
                'table_name' => 'Groups',
                'id' => 5
            )
        )->execute();

    */
    public function action_delete()
    {
        $post = $this->request->post();

        try
        {
            ORM::factory($post['table_name'], $post['id'])->delete();
            $this->ajax_msg(
                isset($post['msg']) ? $post['msg'] : 'Запись удалена'
            );
        }
        catch (Exception  $e)
        {
            $this->ajax_msg($e->getMessage(), 'error');
        }
    }



}
