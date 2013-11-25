<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template
{
    public $template = 'admin/layout';


    public function before()
    {
        parent::before();

        $email = Session::instance()->get('email');
        if(empty($email) && $this->request->uri() === 'admin')
            HTTP::redirect('admin/auth/login');
        elseif(empty($email))
            throw new HTTP_Exception_404();

        $this->template->title = 'Администратор "МПТ Автошкола"';

        $this->template->navbar = View::factory('admin/navbar', array(
            'session' => Session::instance(),
        ));

        $this->template->content = '';


        //$this->template->footer = View::factory('main/footer');
    }

    public function action_gr_obr()
    {
        $this->template->content = View::factory('admin/gr_obr');
    }

    public function action_index()
    {
        $this->template->content = View::factory('admin/index', array(
            'audience' => Model::factory('Users')->get_user_list(true),
        ));
    }

    public function action_mail()
    {
        $this->template->content = View::factory('admin/mail/send', array(
            'titles' => Model::factory('MsgTemplates')->all(),
            'list_users' => Model::factory('Users')->get_user_list(false),
            'list_groups' => ORM::factory('Groups')->find_all()
        ));
    }

    public function action_group()
    {
        $this->template->content = View::factory('admin/test/dist_group', array(
            'none_group_users' => Model::factory('Users')->users_without_group()
        ));
    }


    public function action_settings()
    {
        $data = Kohana::$config->load('settings.smtp');
        if ($data != 0)
            $data = unserialize($data);

        $this->template->content = View::factory('admin/settings/index', array(
            'all_admins' => Model::factory('Administrators')->all('desc'),
            'upload_files' => Model::factory('Files')->all(),
            'smtp' => $data
        ));
    }

    public function action_tpl()
    {
        $this->template->content = View::factory('admin/mail/tpl', array(
            'titles' => Model::factory('MsgTemplates')->all(),
        ));
    }


}
