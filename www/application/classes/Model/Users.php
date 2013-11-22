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
		'group_id' => array('data_type' => 'int', 'is_nullable' => false),
		'status' => array('data_type' => 'int', 'is_nullable' => false)
	);

    protected $_has_one = array(
        'Statements' => array(
            'model' => 'Statements',
            'foreign_key' => 'user_id',
        ),
        'Contracts' => array(
            'model' => 'Contracts',
            'foreign_key' => 'user_id',
        ),

    );

    /**
     * вернет array(
        0 => 'Фамилия И.О.',
     * );
     * @return array
     */
    public function getNoApproved()
    {
        $noApprovedUsers = ORM::factory('Users')->where('status', '<', 3)->find_all();
        $arr = array();
        foreach ($noApprovedUsers as $value) {
            $arr[$value->id] =
                    $value->Statements->famil . ' '.
                    UTF8::substr($value->Statements->imya,0, 1).'.' .
                    UTF8::substr($value->Statements->ot4estvo,0, 1).'.';
        }
        return $arr;
    }

    public function allInfoNoApproved($id)
    {
        $user = ORM::factory('Users')->where('id','=',(int)$id)->and_where('status', '<', 3)->find();
        $user->Statements->Nationality;
        $user->Statements->Educations;

        $statement = array();
        foreach ($user->Statements->as_array() as $k => $v) {
/*            if ($k === 'nationality_id' || $k === 'education_id')
                continue;
            if ($k === 'Nationality' || $k === 'Educations') {
                array_shift($v);
                foreach ($v as $key => $val)
                    $statement[$k] = $v[$key];
                continue;
            }*/
            $statement[$k] = $v;
        }


        return array(
            'user' => array(
                'status' => $user->status
            ),
            'statement' => $statement,
            'contract' => $user->Contracts->as_array()
        );

    }

    /**
     * заменить это говно на норм код
     * @param $id
     * @param $status
     * @return bool
     */
    public function change_status($id, $status)
    {
        $user = ORM::factory('Users', $id);
        $user->status = (int)$status;
        $user->update();

        return true;
    }




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