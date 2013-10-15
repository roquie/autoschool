<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Users extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Users';
    protected $_primary_key = 'id';
    protected $_primary_val = 'email';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'photo' => array('data_type' => 'string', 'is_nullable' => false),
		'password' => array('data_type' => 'string', 'is_nullable' => false),
		'email' => array('data_type' => 'string', 'is_nullable' => false),
		'Statement_id' => array('data_type' => 'int', 'is_nullable' => false),
		'Contract_id' => array('data_type' => 'int', 'is_nullable' => false),
	);
}