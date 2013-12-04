<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Files extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Files';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'filename' => array('data_type' => 'string', 'is_nullable' => false),
		'desc' => array('data_type' => 'string', 'is_nullable' => false),
		'path' => array('data_type' => 'string', 'is_nullable' => false),
	);


    public function filters()
    {
        return array(
            true => array(
                array('trim'),
                array('Security::xss_clean', array(':value')),
            )
        );
    }
}