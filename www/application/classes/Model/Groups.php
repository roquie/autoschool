<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Groups extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Groups';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'name' => array('data_type' => 'string', 'is_nullable' => false),
	);

    protected $_has_one = array(
        'news' => array(
            'model' => 'News',
            'foreign_key' => 'group_id',
        ),
        'group' => array(
            'model' => 'Groups',
            'foreign_key' => 'group_id',
        ),

    );

    public function getNews($id)
    {
       /* $res = ORM::factory('Groups');
        $lol = $res->news->where('group_id', '=', $id)->find_all();
        foreach ($lol as $v) {
            echo $v->message.'<br>';
            echo $res->name.'<br>';
        }*/

        /*$data = array();
        foreach ($res as $v) {
            $data[] = $v->news->message;
        }*/

       // return $data;
        /* if ($group->loaded())
             return array(
                 'message' => $group->news->message,
                 'group' => $group->name
             );
         else {
             return false;
         }*/

    }
}