<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_MainPage extends Controller_Ajax_Admin
{

    public function action_getInfoNoApproved()
    {
        $id = $this->request->param('id');
        $result = Model::factory('Users')->allInfoNoApproved($id);

        $this->ajax_data($result);
    }


}
