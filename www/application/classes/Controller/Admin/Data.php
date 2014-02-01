<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Data extends Controller_Admin
{

    public function before()
    {
        parent::before();

    }

    public function action_groups()
    {

        $this->template->content = View::factory('admin/data/groups');
    }

    public function action_national_and_edu()
    {
        $edu = ORM::factory('Educations')->find_all();
        $national = ORM::factory('Nationality')->find_all();
        $this->template->content =
            View::factory('admin/data/national_and_edu', compact('edu', 'national'));
    }


}