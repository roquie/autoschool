<?php defined('SYSPATH') or die('No direct script access.');


class Model_Lk_Contract extends ORM
{
    protected $_table_name = 'Contracts';

    public function addData(array $data)
    {
        try {
            $user = ORM::factory('Lk_Contract');
            $user->values($data)
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
            $contract = ORM::factory('Lk_Contract')
                            ->where('id', '=', (int)$id)
                            ->find()
                            ->as_array();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $contract;
    }

    public function updAll($id, $data)
    {
        try {
            ORM::factory('Lk_Contract', $id)
                ->values($data)
                ->update();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return true;
    }
}
