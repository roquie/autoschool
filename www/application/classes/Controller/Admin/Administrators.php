<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Administrators extends Controller_Admin
{
    /**
     * добавление админа
     */
    public function action_create_adm()
    {
        $post = $this->request->post('data');
        if (empty($post['csrf']))
            throw new HTTP_Exception_404();

        $valid = new Validation(trim($post['csrf']));
        $valid->rules('csrf', array(
	          'not_empty'       => NULL,
	          'Security::check' => NULL,
        ));

        if ($valid->check())
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
        else
            $this->ajax_msg('csrf token error', 'error'); //throw new HTTP_Exception_404();

    }

    public function action_delete()
    {
        $post = $this->request->post('data');
        if (empty($post['csrf']))
            throw new HTTP_Exception_404();

        $valid = new Validation(trim($post['csrf']));
        $valid->rules('csrf', array(
            'not_empty'       => null,
            'Security::check' => null,
        ));

        if ($valid->check())
            try
            {
                $admin = ORM::factory('Administrators', $post['id'])
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
        else
            $this->ajax_msg('csrf token error', 'error'); //throw new HTTP_Exception_404();
    }



}