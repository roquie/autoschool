<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_Administrator extends ORM
{

    protected $_table_name = 'Administrators';

    public function all($orderBy = 'desc')
    {
        $adm = ORM::factory('Admin_Administrator');

        if ($adm->loaded())
            return false;

        return $adm->order_by('id', $orderBy)->find_all();
    }

    public function addAdm(array $data)
    {
        $adm = ORM::factory('Admin_Administrator');

        if (!$adm->loaded())
            return false;
        $adm->values($data)
            ->create();

        return true;
    }

    public function getBy($where, $value)
    {
        $adm = ORM::factory('Admin_Administrator', 'email');
        $login = $adm->where($where, '=', $value)
                      ->find();

        if ($login->loaded())
            return $login->as_array();
        else
            return false;

    }

    public function del($id)
    {
        $del = ORM::factory('Admin_Administrator', $id)
                  ->delete();

        if ($del->loaded())
            return true;
        else
            return false;
    }


}