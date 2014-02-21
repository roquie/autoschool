<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Edu extends Controller_Ajax_Admin
{
    public function before()
    {
        parent::before();

        if (!Security::is_token($this->request->post('csrf')))
        {
            throw new HTTP_Exception_404();
        }
    }


    public function action_create()
    {
        $post = $this->request->post('data');
        try
        {
            $id = ORM::factory('Educations')
                ->values($post)
                ->save()->pk();

            $this->ajax_data(array(
                'id' => $id
            ), 'Запись добавлена');
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }
    }

    public function action_read()
    {
        $post = $this->request->post();

        try
        {
            $result = ORM::factory('Educations')
                ->find_all();
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

    public function action_delete()
    {
        $id = $this->request->param('id');
        $post = $this->request->post('data');

        try
        {
            ORM::factory('Educations', $id)
                ->delete();

            $this->ajax_data(array(
                'id' => $id
            ), 'Запись удалена');
        }
        catch (Exception  $e)
        {
            $this->ajax_msg($e->getMessage(), 'error');
        }

    }


}