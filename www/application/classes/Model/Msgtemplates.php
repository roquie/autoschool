<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Msgtemplates extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Msgtemplates';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'title' => array('data_type' => 'string', 'is_nullable' => false),
		'message' => array('data_type' => 'string', 'is_nullable' => false),
		'author' => array('data_type' => 'string', 'is_nullable' => false),
		'time' => array('data_type' => 'string', 'is_nullable' => false),
		'date' => array('data_type' => 'string', 'is_nullable' => false),
	);

    //  предлагаю выпилить шаблоны. Мы вродь говорили уже на эту тему. Вродь как, согласились. Уточню - удаляем?
}