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


    }



}
