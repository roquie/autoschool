<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main_Mail extends Controller_Ajax_Main
{


    public function action_send()
    {

        if (Botobor_Keeper::get()->isRobot())
        {
            $this->ajax_msg('Ошибка отправки, попробуйте еще раз', 'error');
            exit;
        }

        $post = $this->request->post();

        $valid = $this->ajax_xssclean($_POST);
        if ($valid)
            exit;

        if(!Valid::email($post['email'], true)) {
            $this->ajax_msg('Неверный email адрес', 'error');
            exit;
        }

        if (!Captcha::valid($post['captcha'])) {
            $this->ajax_msg('Код подтвержения не верен', 'error');
            exit;
        }

        $message = View::factory('tmpmail/template', array(
            'content' => View::factory('tmpmail/main/contacts', array(
                    'message' => $post['message'],
                    'name' => $post['name'],
                    'email' => $post['email']
                ))
        ));

        $result = Email::factory('Автошкола МПТ', $message, 'text/html')
            ->to(array(
                      'vik.melnikov@gmail.com',
                      'roquie0@gmail.com',
                      'auto@mpt.ru'
                 ))
            ->from($post['email'], $post['name'])
            ->send();

        if ($result)
            $this->ajax_msg('Сообщение отправлено');
        else
            $this->ajax_msg('Ошибка отправки', 'error');


    }

}