<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Mail extends Controller_Ajax
{
    public function before()
    {
        parent::before();
        // загрузка autoload'а swiftmailer'a
        require Kohana::find_file('vendor', 'swiftmailer/swift_required', 'php');
    }


    /*
     * DEPRICATED - omg why?
     * */
    public function action_send_mail()
    {

        $to = explode(',', Arr::get($_POST, 'to'));
        $msg = Arr::get($_POST, 'msg');
        $subject = Arr::get($_POST, 'subject');

        $fromEmail = Session::instance()->get('email');
        $fromName = Session::instance()->get('first_name').' '.Session::instance()->get('last_name');

        $message = Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom(array($fromEmail => $fromName))
            ->setTo($to)
            ->setBody($msg)
            //->attach(Swift_Attachment::fromPath('l0l.txt'))
        ;
        $transport = Swift_MailTransport::newInstance();
        $mailer = Swift_Mailer::newInstance($transport);
        $result = $mailer->send($message);


        if ($result)
            $this->ajax_msg('Сообщение отправлено');
        else
            $this->ajax_msg('Ошибка отправки');

    }


}