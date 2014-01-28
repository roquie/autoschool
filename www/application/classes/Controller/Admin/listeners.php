<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Listeners extends Controller_Admin
{

    public function action_g_add()
    {
        $this->template->content =
            View::factory('admin/listeners/g_add', array(
                'Nationality' => ORM::factory('Nationality')->find_all(),
                'Educations' => ORM::factory('Educations')->find_all()
            ));
    }

    public function action_distrib()
    {
        $this->template->content =
            View::factory('admin/listeners/distrib')
                ->set('audience', Model::factory('Users')->get_user_list(true));
    }

}