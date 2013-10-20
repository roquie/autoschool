<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Messages extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Messages';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'user_id' => array('data_type' => 'int', 'is_nullable' => false),
		'admin' => array('data_type' => 'int', 'is_nullable' => false),
		'message' => array('data_type' => 'string', 'is_nullable' => false),
		'datetime' => array('data_type' => 'string', 'is_nullable' => false),
	);
}