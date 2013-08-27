<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Mail extends Controller_Admin
{
    public function before()
    {
        parent::before();
        // загрузка autoload'а swiftmailer'a
        require Kohana::find_file('vendor', 'swiftmailer/swift_required', 'php');
    }

    public function action_index()
    {
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();


        $this->template->content = View::factory('admin/mail/send', array(
            'titles' => Model::factory('Admin_MsgTemplate')->getAll(),
        ));
    }



    /*
     * DEPRICATED
     * */
    public function action_send_mail()
    {
        $this->auto_render = false;

        if (Request::initial()->is_ajax()) {

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

            if ($result) {
                $response = array(
                    'status' => 'success', //error or info
                    'msg' => 'Сообщение отправлено'
                );
            } else {
                $response = array(
                    'status' => 'error', //error or info
                    'msg' => 'Ошибка отправки'
                );
            }
            echo json_encode($response);

        } else
            throw new HTTP_Exception_404();

    }


}