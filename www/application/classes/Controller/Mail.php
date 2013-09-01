<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mail extends Controller_Ajax {

    public function action_send()
    {
        $this->ajax_msg('qwe', 'error');
    }

}