<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Group extends Controller_Ajax_Admin
{


    /**
     * метод для добавления группы
     */
    public function action_add()
    {
        $post = $this->request->post('data');
        if (!empty($id)) {
            try
            {
                ORM::factory('Groups')->values($post)->save();
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
     * метод для удаления группы с переданным <id>
     */
    public function action_delete()
    {
        $id = $this->request->param('id');

        try
        {
            ORM::factory('Groups', (int)$id)->delete();
            $this->ajax_msg('Группа удалена');
        }
        catch (Exception  $e)
        {
            $this->ajax_msg('Ошибка бд', 'error');
        }
    }






}
