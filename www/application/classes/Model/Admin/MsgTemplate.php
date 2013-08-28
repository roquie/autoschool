<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_MsgTemplate extends ORM
{
    protected $_table_name = 'MsgTemplates';


    public function getTitle($title)
    {
        $titles = ORM::factory('Admin_MsgTemplate', 'title');
        $find = $titles->where('title', '=', $title)->find()->as_array();
        return $find;
    }


    public function addMsgTemplate(array $data)
    {
        $user = ORM::factory('Admin_MsgTemplate');
        $user->values($data)
            ->create();
    }

    public function updateMsgTemplate(array $data)
    {
        $id = array_shift($data);
        $user = ORM::factory('Admin_MsgTemplate', $id);
        $user->values($data)
            ->update();
    }

    /*
     * гавнокод, но lastInsertId не работает нихуя
     * */
    public function getLastRecord()
    {
        $record = ORM::factory('Admin_MsgTemplate')->order_by('id', 'desc')->find()->as_array();
        return $record;
    }


    public function getAll()
    {
        return ORM::factory('Admin_MsgTemplate')->find_all();
    }

    public function getTplById($id)
    {
        $tpls = ORM::factory('Admin_MsgTemplate');
        $tpl = $tpls->where('id', '=', $id)->find()->as_array();
        return $tpl;
    }

    public function getAllArray()
    {
        $data = array();
        $tpls = ORM::factory('Admin_MsgTemplate')->find_all();
        foreach ($tpls as $tpl) {
            $data[] = $tpl->as_array();
        }
        return $data;
    }

    public function deleteTpl($id)
    {
        ORM::factory('Admin_MsgTemplate', $id)->delete();
    }


}