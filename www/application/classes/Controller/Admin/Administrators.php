<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Administrators extends Controller_Ajax_Admin
{

    /**
     * добавление админа
     */
    public function action_create()
    {
        $admin = ORM::factory('Administrators')->values($this->request->post('data'));
        try
        {
            $admin->save();

            $this->ajax_data(
                array(
                    'id' => $admin->pk(),
                    'email' => $this->request->post('data.email')
                ),
                'Пользователь добавлен'
            );
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }

    }


    /**
     * удаление админа
     */
    public function action_delete()
    {
        $id = $this->request->param('id');

        try
        {
            ORM::factory('Administrators', (int)$id)->delete();
            $this->ajax_msg('Админ удален');
        }
        catch (Exception  $e)
        {
            $this->ajax_msg('ошибка бд', 'error');
        }
    }


}