<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Educations extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Educations';
    protected $_primary_key = 'id';
    protected $_primary_val = 'obrazovanie';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'obrazovanie' => array('data_type' => 'string', 'is_nullable' => false),
	);
}