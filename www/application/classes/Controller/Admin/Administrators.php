<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Administrators extends Controller_Admin
{
    /**
     * добавление админа
     */
    public function action_create_adm()
    {
        try
        {
            $admin = ORM::factory('Administrators')->values($this->request->post('data'));
            $admin->save();

            $this->ajax_data(
                array(
                    'id' => $admin->pk(),
                    'email' => $this->request->post('data.email')
                ),
                'Администратор добавлен'
            );
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }

    }

    public function action_delete()
    {
        $post = $this->request->param('id');

        try
        {
            $admin = ORM::factory('Administrators', $post)->delete();
            $this->ajax_data(
                array(
                    'id' => $admin->pk(),
                ),
                'Администратор удален'
            );
        }
        catch (Exception  $e)
        {
            $this->ajax_msg('Ошибка БД: '.$e->getMessage(), 'error');
        }
    }



}