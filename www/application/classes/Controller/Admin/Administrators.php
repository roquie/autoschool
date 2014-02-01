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
            $post = $this->request->post('data');
            $admin = ORM::factory('Administrators')->values($post);
            $admin->save();

            $message = View::factory('tmpmail/template',
                array(
                      'content' => View::factory('tmpmail/admin/add_adm',
                       array(
                            'name' => 'МПТ Автошкола',
                            'message' => 'Вас добавили в администраторы. '.URL::site('/admin'),
                       ))
             ));
            try
            {
                Email::factory('Автошкола МПТ', $message, 'text/html')
                    ->to($post['email'])
                    ->from('auto@mpt.ru', 'МПТ Автошкола')
                    ->send();
            }
            catch(Swift_SwiftException $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }


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