<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Titles extends ORM
{
    protected $_db = 'default';
    protected $_table_name  = 'Titles';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
        'id' => array('data_type' => 'int', 'is_nullable' => false),
        'title' => array('data_type' => 'string', 'is_nullable' => false),
        'user_id' => array('data_type' => 'int', 'is_nullable' => false),
    );

    protected $_belongs_to = array(
        'user'  => array(
            'model'       => 'Users',
            'foreign_key' => 'user_id',
        ),
    );

    protected $_has_many = array(
        'messages'    => array(
            'model'       => 'Messages',
            'foreign_key' => 'title_id',
        )
    );

    public function rules()
    {
        return array(
            'title' => array(
               array('not_empty'),
               array('min_length', array(':value', 5)),
               array('max_length', array(':value', 50)),
            ),
            'user_id' => array(

                array('digit'),
            ),

        );
    }

    public function labels()
    {
        return array(
            'title' => 'Поле "Заголок" ',
            'user_id' => 'id пользователя',
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

    public function getTitles($user_id, $offset = 1, $limit = 10)
    {
        $start = ($offset - 1) * $limit;
        $data = ORM::factory('Titles')
            ->where('user_id', '=', $user_id)
            ->order_by('id', 'DESC')
            ->limit($limit)
            ->offset( $start )
            ->find_all();

        $titles = array();

        foreach( $data as $item ) {
            $titles[$item->id]['title'] = $item;
            $titles[$item->id]['message'] = ORM::factory('Messages')
                ->where('title_id', '=', $item->id)
                ->and_where('user_id', '=', $user_id)
                ->limit(1)
                ->order_by('id', 'DESC')
                ->find();
        }

        return $titles;
    }

}