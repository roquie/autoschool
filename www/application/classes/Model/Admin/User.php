<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_User extends ORM
{
    protected $_table_name = 'Users';
    //protected $_primary_key = 'id';


    //protected $_db_group = 'mpt'
    public function get_all()
    {
        $users = ORM::factory('Admin_User');
        if ($users->loaded())
            throw new HTTP_Exception_404('Пользователи не найдены');
        return $users->find_all();

        //Arm::factory('Admin_User')
    }

    public function getAllEmails()
    {
        $users = ORM::factory('Admin_User', 'email');
        if ($users->loaded())
            throw new HTTP_Exception_404('emails не найдены');
        return $users->find_all();
    }

    public function getUsersWithRights()
    {
        $users = ORM::factory('Admin_User');
        if ($users->loaded())
            throw new HTTP_Exception_404('Пользователи и права не найдены');
        return $users->find_all();
    }


    public function get_email($email)
    {
        $user = ORM::factory('Admin_User');
        $login = $user->where('email', '=', $email)->find()->as_array();
        return $login;
    }

    public function getOneEmail($email)
    {
        $user = ORM::factory('Admin_User', 'email');
        $login = $user->where('email', '=', $email)->find()->as_array();
        return $login;
    }

    public function addUser(array $data)
    {
        $user = ORM::factory('Admin_User');
        if ($user->loaded())
            throw new HTTP_Exception_404('Юзеры не загрузились, чтото с бд капитан');
        $user->values($data)
            ->create();
    }

    public function updateUsers(array $data)
    {
        $user = ORM::factory('Admin_User', array_shift($data));
        $user->values($data)
            ->update();
    }

    public function deleteUser($id)
    {
        ORM::factory('Admin_User', $id)->delete();
    }

    public function getEmailsWithoutCurrent($email)
    {
        return DB::query(Database::SELECT, 'SELECT email FROM users NOT IN (:email)')
                ->param(':email', $email)
                ->execute();
    }

}