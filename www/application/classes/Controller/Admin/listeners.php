<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Listeners extends Controller_Admin
{

    public function action_distrib()
    {
        $this->template->content =
            View::factory('admin/listeners/distrib')
                ->set('audience', Model::factory('Users')->get_user_list(true));
    }

}