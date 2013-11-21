<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Mail extends Controller_Ajax_Admin
{

    public function action_send_mail()
    {
        $valid = $this->ajax_xssclean($_POST);
        if ($valid)
            exit;

        $to = explode(', ', Arr::get($_POST, 'to'));
        $to = array_filter($to);
        $msg = Arr::get($_POST, 'editor');
        $files = Arr::get($_POST, 'files');
        if (isset($files))
            $files = explode(',', $files);

        $subject = Arr::get($_POST, 'subject');

        /* if(!Valid::email($email, true)) {
                $this->ajax_msg('Неверный email адрес', 'error');
                exit;
         }*/


        $fromEmail = Session::instance()->get('email');
        $fromName = Session::instance()->get('first_name').' '.Session::instance()->get('last_name');

        $result = Email::factory($subject, $msg)
            ->to($to)
            ->from($fromEmail, $fromName);

        if (isset($files))
            foreach ($files as $file)
                $result->attach_file(APPPATH.$file);

        $result->send();

        if ($result)
            $this->ajax_msg('Сообщение отправлено');
        else
            $this->ajax_msg('Ошибка отправки', 'error');

    }


}
