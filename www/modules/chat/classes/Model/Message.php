<?php defined('SYSPATH') or die('No direct script access.');


class Model_Message extends ORM
{
    protected $_table_name = 'Messages';

    protected $_belongs_to = array(
        'user'  => array(
            'model'       => 'User',
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
            $messages = ORM::factory('Message')
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

    /**
     * Добавление сообщения
     * @param array $data
     * @return bool|ORM
     */
    public function addMessage(array $data)
    {
        try {
            $message = ORM::factory('Message');
            $message->values($data)
                ->create();
        } catch(ORM_Validation_Exception $e) {
            return false;
        }
        return true;
    }

    /**
     * Очистка истории
     * @param $id
     * @return bool
     */
    public function delMessage($id)
    {
        try {
            $messages = ORM::factory('Message')
                ->where('user_id', '=', $id)
                ->find_all();
            foreach ($messages as $message) {
                ORM::factory('Message', $message->id)->delete();
            }
        } catch(ORM_Validation_Exception $e) {
            return false;
        }
        return true;
    }

}