<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Messages extends Controller_Admin
{

    public function action_index()
    {
        $u = new Model_Users();
        $g = new Model_Groups();

        $list_users = $u->get_user_list(false);
        $list_groups = $g->find_all();

        $this->template->content =
            View::factory('admin/messages/index', compact('list_users', 'list_groups'));

    }

    /**
     * получить список юзеров по group_id
     * @throws HTTP_Exception_404
     */
    public function action_users_by_group()
    {
        $this->auto_render = false;
        $post = $this->request->post('data');

        if (Request::initial()->is_ajax() && Security::is_token($post['csrf']))
        {
            try
            {
                $result = Model::factory('Users')->by_group_id($post['group_id']);
                if (!$result)
                    $this->ajax_msg('Записей нет','error');
                else
                    $this->ajax_data($result);
            }
            catch (Exception  $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }
        }
        else
        {
            throw new HTTP_Exception_404();
        }
    }

    /**
     * отправка сообщения
     * @throws HTTP_Exception_404
     */
    public function action_send()
    {
        $this->auto_render = false;
        $post = $this->request->post('data');
        if (Request::initial()->is_ajax() && Security::is_token($post['csrf']))
        {
            try
            {
                ORM::factory('Messages')
                    ->values($post)
                    ->save();

                $this->ajax_msg('Сообщение отправлено');
            }
            catch (ORM_Validation_Exception  $e)
            {
                $errors = $e->errors('validation');
                $this->ajax_msg(array_shift($errors), 'error');
            }
        }
        else
        {
            throw new HTTP_Exception_404();
        }
    }

    /**
     * получить все сообщения от чувака с user_id = <...>
     * @throws HTTP_Exception_404
     */
    public function action_read()
    {
        $post = $this->request->post('data');
        if (Request::initial()->is_ajax() && Security::is_token($post['csrf']))
        {
            try
            {
                $result = ORM::factory('Messages')
                             ->where('user_id', '=', $post['user_id'])
                             ->find_all();

                $data = array();
                foreach ($result as $value)
                    $data[] = $value->as_array();

                $this->ajax_data($data);
            }
            catch (Exception  $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }
        }
        else
        {
            throw new HTTP_Exception_404();
        }

    }


}