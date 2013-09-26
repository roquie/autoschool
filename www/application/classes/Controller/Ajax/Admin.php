<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Admin extends Controller_Ajax_Ajax
{

    public function before()
    {
        parent::before();

        // мыло админа сайта
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        $this->auto_render = false;
        if (Kohana::$environment === Kohana::PRODUCTION)
            if (!Request::initial()->is_ajax())
                throw new HTTP_Exception_404();

    }


}