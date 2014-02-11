<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Educations extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Educations';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'obrazovanie' => array('data_type' => 'string', 'is_nullable' => false),
	);

    public function rules()
    {
        return array(
            'obrazovanie' => array(
                array('not_empty'),
                //array('alpha', array(':value', true)), - иначе нельзя вводить пробел и тире
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 50)),
            ),

        );
    }

    public function labels()
    {
        return array(
            'obrazovanie' => 'Образование',
        );
    }

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