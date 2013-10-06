<?php defined('SYSPATH') or die('No direct script access.');


class Model_Lk_Education extends ORM
{
    protected $_table_name = 'Educations';

    public function all($orderBy = 'asc')
    {
        $adm = ORM::factory('Lk_Education');

        if ($adm->loaded())
            return false;

        return $adm->order_by('id', $orderBy)->find_all();
    }

    public function addData(array $data)
    {
        try {
            $user = ORM::factory('Lk_Education')
                ->values($data)
                ->create()->pk();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $user;
    }

    public function byId($id)
    {
        try {
            $statement = ORM::factory('Lk_Education')
                ->where('id', '=', (int)$id)
                ->find()
                ->as_array();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $statement;
    }


}