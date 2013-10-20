<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Nationality extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Nationality';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'grajdanstvo' => array('data_type' => 'string', 'is_nullable' => false),
	);
}