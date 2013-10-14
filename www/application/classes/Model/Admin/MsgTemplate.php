<?php defined('SYSPATH') or die('No direct script access.');

class Model_Admin_MsgTemplate extends ORM
{
    protected $_table_name = 'MsgTemplates';

    /*
     * гавнокод
     * */
    public function getLastRecord()
    {
        $record = ORM::factory('Admin_MsgTemplate')->order_by('id', 'desc')->find()->as_array();
        return $record;
    }

}