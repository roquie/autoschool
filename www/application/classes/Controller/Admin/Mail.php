<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Mail extends Controller_Admin
{

    public function action_index()
    {
        $this->template->content = View::factory('admin/mail/send', array(
            'list_users' => Model::factory('Users')->get_user_list(false),
            'list_groups' => ORM::factory('Groups')->find_all()
        ));
    }


}