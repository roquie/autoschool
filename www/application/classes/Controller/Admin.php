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
        $this->template->content = 'Adminka';
    }

    public function action_mail()
    {
        $this->template->content = View::factory('admin/mail/send', array(
            'titles' => Model::factory('Admin_MsgTemplate')->all(),
        ));
    }


    public function action_settings()
    {

        $this->template->content = View::factory('admin/settings', array(
            'all_admins' => Model::factory('Admin_Administrator')->all('desc'),
            'googleAccount' => Model::factory('Admin_GoogleAccount')->getLastRecord(),
            'googleAccountAllRecords' => Model::factory('Admin_GoogleAccount')->all(),
        ));
    }

    public function action_tpl()
    {
        $this->template->content = View::factory('admin/mail/tpl', array(
            'titles' => Model::factory('Admin_MsgTemplate')->all(),
        ));
    }


}
