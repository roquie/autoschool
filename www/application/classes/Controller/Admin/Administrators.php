<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Administrators extends Controller_Admin
{
    /**
     * добавление админа
     */
    public function action_create_adm()
    {
        $this->auto_render = false;
        $post = $this->request->post('data');

        if (Request::initial()->is_ajax() && Security::is_token($post['csrf']))
        {
            try
            {

                $admin = ORM::factory('Administrators')
                    ->values($post)
                    ->save();

                $message = View::factory('tmpmail/template',
                    array(
                        'content' => View::factory('tmpmail/admin/add_adm',
                            array(
                                'name' => 'МПТ Автошкола',
                                'message' => 'Вас добавили в администраторы. Для входа используйте Google аккаунт. '.HTML::anchor(URL::site('/admin'), URL::site('/admin')),
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
        else
        {
           throw new HTTP_Exception_404();
        }

    }

    public function action_delete()
    {
        $this->auto_render = false;
        $csrf = $this->request->post('data.csrf');

        $id = $this->request->param('id');

        if (Security::is_token($csrf))
        {
            try
            {
                $admin = ORM::factory('Administrators', $id)
                    ->delete();

                $this->ajax_data(
                    array(
                        'id' => $admin->pk(),
                    ),
                    'Администратор удален'
                );
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