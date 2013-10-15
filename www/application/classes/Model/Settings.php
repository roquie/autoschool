<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Settings extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Settings';
    protected $_primary_key = 'id';
    protected $_primary_val = 'type';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'type' => array('data_type' => 'string', 'is_nullable' => false),
		'param' => array('data_type' => 'int', 'is_nullable' => false),
	);
}