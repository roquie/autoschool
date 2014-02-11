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

    /**
     * некий условный код
     */
    public function action_pdd()
    {
        $this->auto_render = false;
        if (Request::initial()->is_ajax())
        {
            $post = $this->request->post('data');

            try
            {
                $result = ORM::factory('Teachers')
                             ->where('profile_id', '=', $post['pdd'])
                             ->find()
                             ->as_array();

                $this->ajax_data(
                    $result,
                    'Загружаю список'
                );
            }
            catch (Exception  $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }
        }
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