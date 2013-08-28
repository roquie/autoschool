<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_PreReg extends ORM
{

    protected $_table_name = 'PreRegs';

    public function addPreRegUser(array $data)
    {
        $user = ORM::factory('Admin_PreReg');
        if ($user->loaded())
            throw new HTTP_Exception_404('Юзеры не загрузились, чтото с бд капитан');
        $user->values($data)
            ->create();
        return true;
    }

    public function getOneEmail($email)
    {
        $user = ORM::factory('Admin_PreReg', 'email');
        $login = $user->where('email', '=', $email)->find()->as_array();
        return $login;
    }

    public function delPreRegUser($email)
    {
        ORM::factory('Admin_PreReg', array('email' => $email))->delete();
    }

}