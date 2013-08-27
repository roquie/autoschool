<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main_Index extends Controller_Main
{


    public function action_index()
    {
        $this->template->content = View::factory('main/index');
    }

    public function action_statement()
    {
        $this->template->content = View::factory('main/blank/statement');
    }



}