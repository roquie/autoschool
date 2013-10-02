<?php defined('SYSPATH') or die('No direct script access.');


class Model_Lk_Statement extends ORM
{
    protected $_table_name = 'Statements';

    public function addData(array $data)
    {
        try {
            $user = ORM::factory('Lk_Statement')
                ->values($data)
                ->create()->pk();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $user;
    }

    public function getById($id)
    {
        try {
            $statement = ORM::factory('Lk_Statement')
                            ->where('id', '=', (int)$id)
                            ->find()
                            ->as_array();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $statement;
    }



    public function updAll($id, $data)
    {
        try {
            ORM::factory('Lk_Statement', $id)
                ->values($data)
                ->update();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return true;
    }


}
