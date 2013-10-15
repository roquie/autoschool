<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Administrators extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Administrators';
    protected $_primary_key = 'id';
    protected $_primary_val = 'datetime';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'email' => array('data_type' => 'string', 'is_nullable' => false),
		'datetime' => array('data_type' => 'string', 'is_nullable' => false),
	);
}