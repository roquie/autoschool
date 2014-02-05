<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Messages extends Controller_Admin
{

    public function action_index()
    {
        $list_users = Model::factory('Users')->get_user_list(false);
        $list_groups = ORM::factory('Groups')->find_all();

        $this->template->content =
            View::factory('admin/messages/index', compact('list_users', 'list_groups'));


    }


}