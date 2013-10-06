<?php defined('SYSPATH') or die('No direct script access.');


class Model_Lk_Statement extends ORM
{
    protected $_table_name = 'Statements';

    protected $_has_one = array(
        'Nationality' => array(
            'model' => 'Nationality',
            'foreign_key' => 'nationality_id',
        ),
        'Education' => array(
            'model' => 'Education',
            'foreign_key' => 'education_id',
        ),
    );


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
/*
    public function getNationalityById($id)
    {
        try {
           $nat = ORM::factory('Lk_Statement', $id)
                        ->where('id', '=', (int)$id)
                        ->find_all();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $nat;
    }*/
/*
    public function getNationality($id)
    {
        try {
            $nat = ORM::factory('Lk_Statement', $id)
                ->where('id', '=', (int)$id)
                ->find_all();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $nat;
    }*/



}
