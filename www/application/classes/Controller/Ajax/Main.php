<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Main extends Controller_Ajax_Ajax
{

    public function before()
    {
        parent::before();

        $this->auto_render = false;
        if (Kohana::$environment === Kohana::PRODUCTION)
            if (!Request::initial()->is_ajax() || empty($post))
                throw new HTTP_Exception_404();

    }


}
