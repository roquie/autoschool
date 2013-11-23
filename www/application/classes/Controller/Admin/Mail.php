<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Mail extends Controller_Ajax_Admin
{


    /**
     * метод для добавление новости для группы с переданным <id>
     */
    public function action_add_news()
    {
        // group_id
        $id = $this->request->param('id');
        $post = $this->request->post('data');
        $post['group_id'] = $id;
        if (!empty($id)) {
            try
            {
                $result = ORM::factory('Groups', $id);
                if (!$result->id) {
                    $this->ajax_msg('Такой группы нет', 'error');
                    exit;
                }
                ORM::factory('News')->values($post)->save();
                $this->ajax_msg('Сообщение для группы добавлено');
            }
            catch (ORM_Validation_Exception  $e)
            {
                $errors = $e->errors('validation');
                $this->ajax_msg(array_shift($errors), 'error');
            }
        }
    }

    /**
     * метод для удаления новости у группы с переданным <id>
     */
    public function action_delete_news()
    {
        $id = $this->request->param('id');

        try
        {
            ORM::factory('News', (int)$id)->delete();
            $this->ajax_msg('Новость удалена');
        }
        catch (Exception  $e)
        {
            $this->ajax_msg('Ошибка бд', 'error');
        }
    }






}
