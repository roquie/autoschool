<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Index extends Controller_Admin
{


    public function action_index()
    {
        Gmodeler::init();

        $u = new Model_Users();
        $g = new Model_Groups();

        $list_users = $u->get_user_list(false);
        $list_groups = $g->find_all();

        $this->template->content =
            View::factory('admin/index', compact('list_users', 'list_groups'));

    }


}