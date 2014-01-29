<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Teachers extends Controller_Admin
{

    public function action_index()
    {
        $this->template->content = View::factory('admin/teachers/index');
    }


    public function action_all()
    {
        $this->template->content = View::factory('admin/teachers/all');
    }

    public function action_pdd()
    {

    }

    public function action_tu_and_to()
    {

    }

    public function action_opmt()
    {
        
    }

    public function action_driver_instructor()
    {
        
    }

}