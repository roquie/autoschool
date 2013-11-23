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

    public function rules()
    {
        return array(
            'grajdanstvo' => array(
                array('not_empty'),
                array('alpha', array(':value', true)),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 50)),
            ),

        );
    }

    public function labels()
    {
        return array(
            'grajdanstvo' => 'Гражданство',
        );
    }

    public function filters()
    {
        return array(
            true => array(
                array('trim')
            )
        );
    }
}