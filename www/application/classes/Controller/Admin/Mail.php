<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Mail extends Controller_Ajax
{

    public function action_send_mail()
    {

        $to = explode(',', Arr::get($_POST, 'to'));
        $msg = Arr::get($_POST, 'msg');
        $subject = Arr::get($_POST, 'subject');

        $fromEmail = Session::instance()->get('email');
        $fromName = Session::instance()->get('first_name').' '.Session::instance()->get('last_name');


        $result = Email::factory($subject, $msg)
            ->to($to)
            ->from($fromEmail, $fromName)
            ->send();

        if ($result)
            $this->ajax_msg('Сообщение отправлено');
            else
            $this->ajax_msg('Ошибка отправки');

    }


}