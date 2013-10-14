<?php defined('SYSPATH') or die('No direct script access.');


class Model_Admin_GoogleAccount extends ORM
{
    protected $_table_name = 'GoogleAccounts';


    /*
     * гавнокод
     * */
    public function getLastRecord()
    {
        $record = ORM::factory('Admin_GoogleAccount')->order_by('id', 'desc')->find()->as_array();
        return $record;
    }

}