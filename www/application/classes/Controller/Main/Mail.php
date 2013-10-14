<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main_Mail extends Controller_Ajax_Main
{

    public function action_send()
    {
        if (Botobor_Keeper::get()->isRobot())
        {
            $this->ajax_msg('Ошибка отправки, попробуйте еще раз', 'error');
            exit;

        } else {
            $valid = $this->ajax_xssclean($_POST);
            if ($valid)
                exit;

            $email = Arr::get($_POST, 'email');
            $name = Arr::get($_POST, 'name');
            $msg = Arr::get($_POST, 'message');

            if(!Valid::email($email, true)) {
                $this->ajax_msg('Неверный email адрес', 'error');
                exit;
            }

            $result = Email::factory('Автошкола МПТ', $msg)
                ->to(array(
                          'vik.melnikov@gmail.com',
                          'roquie0@gmail.com',
                          'auto@mpt.ru'
                     ))
                ->from($email, $name)
                ->send();

            if ($result)
                $this->ajax_msg('Сообщение отправлено');
            else
                $this->ajax_msg('Ошибка отправки', 'error');
        }

    }

}