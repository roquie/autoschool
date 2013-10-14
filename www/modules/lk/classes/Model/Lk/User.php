<?php defined('SYSPATH') or die('No direct script access.');

class Model_Lk_User extends ORM
{
    protected $_table_name = 'users';

    protected $_has_one = array(
        'Statement' => array(
            'model' => 'Lk_Statement',
            'foreign_key' => 'Statement_id',
        ),
        'Contract' => array(
            'model' => 'Lk_Contract',
            'foreign_key' => 'Contract_id',
        ),
    );



    public function login(array $data)
    {
        try {
            $result = ORM::factory('Lk_User')
                        ->where('email', '=', $data['email'])
                        ->and_where('password', '=', $data['password'])
                        ->find();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $result;
    }


    public function updPwd($id, $pwd)
    {
        try {
            ORM::factory('Lk_User', $id)
                ->values(array(
                           'password' => $pwd
                         ))
                ->update();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return true;
    }

}