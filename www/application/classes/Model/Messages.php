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


    public function rules()
    {
        return array(
            'message' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 3000)),
            ),
            'is_read' => array(
                array('digit'),
            ),
            'title_id' => array(
                array('digit'),
            ),
            'user_id' => array(
                array('digit'),
            ),
            'admin' => array(
                array('digit'),
            ),

        );
    }

    public function labels()
    {
        return array(
            'message' => 'Текст сообщения',
            'is_read' => 'is_read',
            'title_id' => 'title_id',
            'user_id' => 'user_id',
            'admin' => 'admin',
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