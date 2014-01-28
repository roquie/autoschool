<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main_Mail extends Controller_Ajax_Main
{

    public function action_upload()
    {
        if (!$this->request->is_ajax() || empty($_FILES))
            throw HTTP_Exception_404();

        $validate = Validation::factory($_FILES)
            ->rule('file', 'Upload::valid')
            ->rule('file', 'Upload::not_empty')
            ->rule('file', 'Upload::type', array(':value', array('docx','doc', 'pdf', 'jpg', 'jpeg,', 'png', 'gif', 'tiff', 'psd', 'txt', 'rtf', 'zip', 'rar', '7z', 'pages')))
            ->rule('file', 'Upload::size', array(':value', '5M'));

        if ($validate->check()) {
            $status = Upload::save($_FILES['file'], $_FILES['file']['name'], APPPATH.'uploads/', 0444);
            //$file_name = $_FILES['files']['name'];
            if ($status)
                $this->ajax_msg(); // true
            else
                $this->ajax_msg('Ошибка загрузки файла, письмо не отправлено', 'error');

        } else {
            $errors = $validate->errors('upload');
            $this->ajax_msg(array_shift($errors), 'error');
        }
    }

    public function action_send()
    {
        if (Botobor_Keeper::get()->isRobot())
        {
            $this->ajax_msg('Ошибка отправки, попробуйте еще раз', 'error');
            exit;
        }

        $post = $this->request->post();

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
        $path = APPPATH.'uploads/';
        if (file_exists($path.$post['file_name']) && !empty($post['file_name'])) {

            $result = Email::factory('Автошкола МПТ', $message, 'text/html')
                ->to(array(
                     'vik.melnikov@gmail.com',
                    'roquie0@gmail.com',
                    // 'auto@mpt.ru'
                ))
                ->from($post['email'], $post['name'])
                ->attach_file($path.$post['file_name'])
                ->send();

            unlink($path.$post['file_name']);

        } else {
            $result = Email::factory('Автошкола МПТ', $message, 'text/html')
                ->to(array(
                    'vik.melnikov@gmail.com',
                    'roquie0@gmail.com',
                  //  'auto@mpt.ru'
                ))
                ->from($post['email'], $post['name'])
                ->send();
        }

        if ($result)
            $this->ajax_msg('Сообщение отправлено');
        else
            $this->ajax_msg('Ошибка отправки', 'error');


    }

}