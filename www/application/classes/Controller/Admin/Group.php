<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Group extends Controller_Ajax_Admin
{


    /**
     * метод для добавления группы
     */
    public function action_add()
    {
        $post = $this->request->post('data');

        try
        {
            ORM::factory('Groups')->values($post)->save();
            $this->ajax_msg('Группа добавлена');
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }

    }

    /**
     * метод для распредления слушателей по группам
     */
    public function action_distrib_listeners()
    {
        $post = $this->request->post('data');
        $post = array(
            'listeners' => '21,32',
            'group' => 2
        );
        $post['listeners'] = explode(',',$post['listeners']);
        try
        {

           //ORM::factory('Users')->set('group_id', $post['group'])->where('id','IN', $lol)->update();

            /*DB::update('Users')
                ->value('group_id', $post['group'])
                ->where('id','IN', '('.$post['listeners'].')')
                ->execute();*/
            DB::query(Database::UPDATE, "UPDATE `Users` SET `group_id` = :gr WHERE `id` IN (".$post['listeners'].")")
                ->param(':gr', $post['group'])
              //  ->param(':listeners_id',  DB::expr('('.$post['listeners'].')'))
                ->execute();
            if (count($post['listeners']) === 1)
                $this->ajax_msg('Слушатель определен в группу');
            else
                $this->ajax_msg('Слушатели распределены по группам');

        }
        catch (ORM_Validation_Exception  $e)
        {
          //  echo $e->getMessage();
           // $this->ajax_msg('Ошибка бд', 'error');
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
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
