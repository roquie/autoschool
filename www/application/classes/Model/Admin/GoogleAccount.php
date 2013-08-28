<?php defined('SYSPATH') or die('No direct script access.');


class Model_Admin_GoogleAccount extends ORM
{
    protected $_table_name = 'GoogleAccounts';

   public function getAll()
   {
       return ORM::factory('Admin_GoogleAccount')->order_by('id', 'desc')->find_all();
   }

    /*
     * гавнокод, но lastInsertId не работает нихуя
     * */
   public function getLastRecord()
   {
       $record = ORM::factory('Admin_GoogleAccount')->order_by('id', 'desc')->find()->as_array();
       return $record;
   }

   public function addGoogleAccount(array $data)
   {
       ORM::factory('Admin_GoogleAccount')
           ->values($data)
           ->create();
   }


}