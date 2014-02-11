<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Edu extends Controller_Ajax_Admin
{

    public function action_create()
    {
        $post = $this->request->post('data');
        if (Security::is_token($post['csrf']))
        {
            try
            {
                ORM::factory('Educations')
                    ->values($post)
                    ->save();

                $this->ajax_msg('Запись добавлена');
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
        else
        {
            throw new HTTP_Exception_404();
        }

    }

    public function action_delete()
    {
        $post = $this->request->post('data');

        if (Security::is_token($post['csrf']))
        {
            try
            {
                ORM::factory('Educations', $post['id'])
                    ->delete();

                $this->ajax_msg('Запись удалена');
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