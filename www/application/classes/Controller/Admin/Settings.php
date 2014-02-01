<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Settings extends Controller_Admin
{
    public function before()
    {
        parent::before();

        $no_ajax = array(
            'index'
        );
        if (!in_array($this->request->action(), $no_ajax)) {
            $post = $this->request->post();
            if (Kohana::$environment === Kohana::PRODUCTION)
                if (!Request::initial()->is_ajax())
                    throw new HTTP_Exception_404();
        }

    }


    public function action_index()
    {
        $data = Kohana::$config->load('settings.smtp');
        if (!empty($data))
            $data = unserialize($data);

        $this->template->content = View::factory('admin/settings/index', array(
            'all_admins' => ORM::factory('Administrators')->order_by('id', 'desc')->find_all(),
            'upload_files' => ORM::factory('Files')->find_all(),
            'smtp' => $data
        ));
    }


    public function action_upload()
    {
        $this->auto_render = false;
        //$file_type_id = $this->request->post('data.type_file');
        $file_type_id = $this->request->post('type_file');
        if (empty($file_type_id)) {
            $this->ajax_msg('Не выбран тип загружаемого файла', 'error');
            exit;
        }

        $validate = Validation::factory($_FILES)
            ->rule('file', 'Upload::valid')
            ->rule('file', 'Upload::not_empty')
            ->rule('file', 'Upload::type', array(':value', array('docx','doc', 'pdf')))
            ->rule('file', 'Upload::size', array(':value', '5M'));

        if ($validate->check()) {

            $file_info = ORM::factory('Files')->where('id', '=', $file_type_id)->find();

            if ($file_info->filename === $_FILES['file']['name']) {
                Upload::save($_FILES['file'], $file_info->filename, APPPATH.$file_info->path, 0775);
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
        $this->auto_render = false;
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
        $this->auto_render = false;
        $r = Model::factory('Settings')->set('smtp', 0);
        $r ? $this->ajax_msg('SMTP больше не используется') : $this->ajax_msg('Ошибка БД', 'error');
    }



}