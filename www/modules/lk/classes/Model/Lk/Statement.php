<?php defined('SYSPATH') or die('No direct script access.');


class Model_Lk_Statement extends ORM
{
    protected $_table_name = 'Statements';

    protected $_has_one = array(
        'Nationality' => array(
            'model' => 'Lk_Nationality',
            'foreign_key' => 'nationality_id',
        ),
        'Education' => array(
            'model' => 'Lk_Education',
            'foreign_key' => 'education_id',
        ),
    );


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
