<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_News extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'News';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'title' => array('data_type' => 'string', 'is_nullable' => false),
		'message' => array('data_type' => 'string', 'is_nullable' => false),
		'group_id' => array('data_type' => 'int', 'is_nullable' => false),
	);


}