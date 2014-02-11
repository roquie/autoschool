<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_National extends Controller_Ajax_Admin
{

    public function action_create()
    {
        $post = $this->request->post('data');
        if (Security::is_token($post['csrf']))
        {
            try
            {
                $id = ORM::factory('Nationality')
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
        else
        {
            throw new HTTP_Exception_404();
        }
    }

    public function action_read()
    {
        $post = $this->request->post();
        if (Security::is_token($post['csrf']))
        {
            try
            {
                $result = ORM::factory('Nationality')
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
        else
        {
            throw new HTTP_Exception_404();
        }

    }

    public function action_delete()
    {
        $id = $this->request->param('id');
        $post = $this->request->post('data');

        if (Security::is_token($post['csrf']))
        {
            try
            {
                ORM::factory('Nationality', $id)
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
        else
        {
            throw new HTTP_Exception_404();
        }

    }


}