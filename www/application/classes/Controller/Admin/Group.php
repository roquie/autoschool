<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Group extends Controller_Admin
{
    /*
    post --> /admin/news/create - добавить
    post --> /admin/news/delete/1 - удалить

    */



    public function action_group()
    {
        $this->template->content = View::factory('admin/test/dist_group', array(
            'none_group_users' => Model::factory('Users')->users_without_group(),
            'groups' => ORM::factory('Groups')->find_all()
        ));
    }

    /**
     * метод для распредления слушателей по группам
     */
    public function action_distrib_listeners()
    {
        $post = $this->request->post('data');
        $post = Arr::map('trim', $post);
        try
        {

           /*$users = ORM::factory('Users')->values(array(
               'group_id' => $post['group']
           ));
           $users->where('id','IN', $post['listeners'])->update();*/

            /*DB::update('Users')
                ->value('group_id', $post['group'])
                ->where('id','IN', '('.$post['listeners'].')')
                ->execute();*/

            DB::query(Database::UPDATE, "UPDATE `Users` SET `group_id` = :gr WHERE `id` IN (".$post['listeners'].")")
                ->param(':gr', $post['group'])
               // ->param(':listeners_id', $post['listeners'])
                ->execute();

            //echo View::factory('stats/profiler')->render();
           $this->ajax_msg('Слушатель(-ли) успешно распределён(-ы) в группу(-ы)');
        }
        catch (Database_Exception  $e)
        {
            //echo $e->getMessage();
            $this->ajax_msg('Ошибка бд', 'error');
            /*$errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');*/
        }

    }




}
