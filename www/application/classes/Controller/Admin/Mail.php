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
        if (isset($files)) {
            $files = explode(',', $files);
        }
        $subject = Arr::get($_POST, 'subject');

        $validation = Validation::factory($to)
            ->rule(true, 'email');

        if ( !$validation->check() ) {
            $this->ajax_msg('Неверный email адрес', 'error');
            exit;
        }

        $fromEmail = Session::instance()->get('email');
        $fromName = Session::instance()->get('first_name').' '.Session::instance()->get('last_name');

        $result = Email::factory($subject, $msg)
            ->to($to)
            ->from($fromEmail, $fromName);
        if (isset($files)) {
            foreach ($files as $file) {
                $result->attach_file(APPPATH.$file);
            };
        }
        $result->send();

        if ($result)
            $this->ajax_msg('Сообщение отправлено');
        else
            $this->ajax_msg('Ошибка отправки', 'error');

    }

    /**
     * Получение всех файлов из папки output_blanks
     */
    public function action_getFiles()
    {
        $dir = Arr::get($_POST, 'path');
        $dot = Arr::get($_POST, 'dot');
        $dot = empty($dot) ? 'false' : $dot;
        if (empty($dir)) {
            $dir = 'output_blanks';
        }

        $path = APPPATH.$dir;
        $data = array();

        $iterator = new DirectoryIterator($path);
        $i = 0;
        foreach($iterator as $entry) {
            if ($dot == 'false') {
                if ($iterator->isDot())
                    continue;
            }
            $data[$i]['file'] = $entry->getFilename();
            $data[$i]['type'] = $entry->getType();
            $i++;
        }

        echo View::factory('admin/mail/getFiles', array(
            'path' => $dir,
            'files' => $data
        ))->render();
    }

}