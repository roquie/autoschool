<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Administrators extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Administrators';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'email' => array('data_type' => 'string', 'is_nullable' => false),
		'datetime' => array('data_type' => 'string', 'is_nullable' => false),
	);

    public function rules()
    {
        return array(
           'email' => array(
               array('not_empty'),
               array('email'),
               array(array($this, 'is_unique_email'), array(':value'))
           ),

        );
    }

    public function is_unique_email($email)
    {
        $admin = ORM::factory('Administrators')->where('email', '=', $email)->find();
        return (bool)!$admin->email;
    }

    public function labels()
    {
        return array(
            'email' => 'Почта',
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