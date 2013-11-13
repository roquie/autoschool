<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Messages extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Messages';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'user_id' => array('data_type' => 'int', 'is_nullable' => false),
		'admin' => array('data_type' => 'int', 'is_nullable' => false),
		'message' => array('data_type' => 'string', 'is_nullable' => false),
        'is_read' => array('data_type' => 'int', 'is_nullable' => false),
        'title_id' => array('data_type' => 'int', 'is_nullable' => false),
		'datetime' => array('data_type' => 'string', 'is_nullable' => false),
	);

    protected $_belongs_to = array(
        'user'  => array(
            'model'       => 'Users',
            'foreign_key' => 'user_id',
        ),
    );

    /**
     * получение сообщений для конкретного пользователя
     * @param $user_id
     * @param int $offset
     * @param int $limit
     * @return bool|Database_Result
     */
    public function getMessage($user_id, $offset = 1, $limit = 10)
    {
        $start = ($offset - 1) * $limit;
        try {
            $messages = ORM::factory('Messages')
                ->where('user_id', '=', $user_id)
                ->order_by('id', 'DESC')
                ->limit($limit)
                ->offset( $start )
                ->find_all();
        } catch(ORM_Validation_Exception $e) {
            return false;
        }
        return $messages;
    }

}