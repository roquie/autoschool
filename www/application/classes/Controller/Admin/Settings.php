<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 * Copyright: Roquie0
 * License: LGPL
 * Created: 2013 year
 *
 * */

class Controller_Admin_Settings extends Controller_Ajax_Admin
{

    public function action_upload()
    {
        //$file_type_id = $this->request->post('data.type_file');
        $file_type_id = $this->request->post('type_file');
        if (empty($file_type_id)) {
            $this->ajax_msg('Не выбран тип загружаемого файла', 'error');
            exit;
        }

        $validate = Validation::factory($_FILES)
            ->rule('files', 'Upload::valid')
            ->rule('files', 'Upload::not_empty')
            ->rule('files', 'Upload::type', array(':value', array('docx','doc', 'pdf')))
            ->rule('files', 'Upload::size', array(':value', '3M'));

        if ($validate->check()) {

            $file_info = ORM::factory('Files')->where('id', '=', $file_type_id)->find();

            if ($file_info->filename === $_FILES['files']['name']) {
                Upload::save($_FILES['files'], $file_info->filename, APPPATH.$file_info->path, 0775);
                $this->ajax_msg('Файл загружен и заменен');
            } else {
                $this->ajax_msg('Имя файла не соответствует выбранному', 'error');
                exit;
            }
        } else {
            $errors = $validate->errors('upload');
            $this->ajax_msg(array_shift($errors), 'error');
        }
    }

    public function action_smtp()
    {
        $post = $this->request->post('data');
        $post = Arr::map('trim', $post);
        $validate = Validation::factory($post);
        $validate->rule('server', 'not_empty')
                 ->rule('port', 'not_empty')
                 ->rule('port', 'digit')
                 ->rule('port', 'min_length', array(':value', 1))
                 ->rule('port', 'max_length', array(':value', 65536))
                 ->rule('email', 'email');
                 //->rule('password', 'not_empty');

        if ($validate->check()) {
            $r = Model::factory('Settings')->set('smtp', serialize($post));
            $r ? $this->ajax_msg('Настройки для SMTP сохранены') : $this->ajax_msg('Ошибка БД', 'error');
        } else {
            $errors = $validate->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }

    }

    public function action_off_smtp()
    {
        $r = Model::factory('Settings')->set('smtp', 0);
        $r ? $this->ajax_msg('SMTP больше не используется') : $this->ajax_msg('Ошибка БД', 'error');
    }



}