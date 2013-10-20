<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Users extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Users';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'photo' => array('data_type' => 'string', 'is_nullable' => false),
		'password' => array('data_type' => 'string', 'is_nullable' => false),
		'email' => array('data_type' => 'string', 'is_nullable' => false),
		'statement_id' => array('data_type' => 'int', 'is_nullable' => false),
		'contract_id' => array('data_type' => 'int', 'is_nullable' => false),
		'group_id' => array('data_type' => 'int', 'is_nullable' => false),
		'is_approved' => array('data_type' => 'int', 'is_nullable' => false),
	);

    protected $_has_one = array(
        'Statements' => array(
            'model' => 'Statements',
            'foreign_key' => 'statement_id',
        ),
        'Contracts' => array(
            'model' => 'Contracts',
            'foreign_key' => 'contract_id',
        ),
    );

    public function login(array $data)
    {
        try {
            $result = ORM::factory('Users')
                ->where('email', '=', $data['email'])
                ->and_where('password', '=', $data['password'])
                ->find();
        } catch(ORM_Validation_Exception $e) {
            return false;
            //return $e->errors('');
        }

        return $result;
    }


}