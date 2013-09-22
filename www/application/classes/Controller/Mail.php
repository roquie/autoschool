<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mail extends Controller_Ajax {

    public function action_send()
    {

        $valid = $this->ajax_xssclean($_POST);
        if ($valid)
            exit;

        $from = Arr::get($_POST, 'email');
        $name = Arr::get($_POST, 'name');
        $msg = Arr::get($_POST, 'message');

        $validation = Validation::factory($_POST)
            ->rule('email', 'email');

        if ( !$validation->check() ) {
            $this->ajax_msg('Неверный email адрес', 'error');
            exit;
        }

        $result = Email::factory(null, $msg)
            ->to('vik.melnikov@gmail.com', 'roquie0@gmail.com', 'auto@mpt.ru')
            ->from($from, $name)
            ->send();

        if ($result)
            $this->ajax_msg('Сообщение отправлено');
        else
            $this->ajax_msg('Ошибка отправки', 'error');
    }

}