<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Admin extends Controller_Template
{
    public $template = 'admin/layout';

    public function before()
    {
        parent::before();

        // мыло админа сайта
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        $this->auto_render = false;
        $post = $this->request->post();
        if (Kohana::$environment === Kohana::PRODUCTION)
            if (!Request::initial()->is_ajax() || empty($post))
                throw new HTTP_Exception_404();

    }


}