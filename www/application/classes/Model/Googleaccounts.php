<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Googleaccounts extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Googleaccounts';
    protected $_primary_key = 'id';
    protected $_primary_val = 'date';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'login' => array('data_type' => 'string', 'is_nullable' => false),
		'password' => array('data_type' => 'string', 'is_nullable' => false),
		'time' => array('data_type' => 'string', 'is_nullable' => false),
		'date' => array('data_type' => 'string', 'is_nullable' => false),
	);
}