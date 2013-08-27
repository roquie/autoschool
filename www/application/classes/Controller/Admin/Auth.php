<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller
{

    public function action_login()
    {
        $email = Session::instance()->get('email');
        if (!isset($email))
            GOAuth::factory()->getAuthData();
        else
            HTTP::redirect('/admin');
    }

    public function action_goauth()
    {
        $userInfo = GOAuth::factory()->getUserData($this->request->query('code'));
        if(empty($userInfo)) throw new HTTP_Exception_404();
        $firstAndLastNames = explode(' ',$userInfo['name']);


        $data = Model::factory('Admin_PreReg')->getOneEmail($userInfo['email']);

        if (!empty($data['email'])) {
            Model::factory('User')->addUser(array(
                'first_name' => $firstAndLastNames[0],
                'last_name' => $firstAndLastNames[1],
                'email' => $userInfo['email'],
                'photo' => $userInfo['picture'],
                'group_id' => $data['group_id']
            ));

            Model::factory('Admin_PreReg')->delPreRegUser($userInfo['email']);
        }

        $user = Model::factory('Admin_User')->get_email($userInfo['email']);
        if (empty($user))
            throw new HTTP_Exception_404();

            Session::instance()->set('id', $user['id']);
            Session::instance()->set('email', $user['email']);
            Session::instance()->set('first_name', $user['first_name']);
            Session::instance()->set('last_name', $user['last_name']);
            Session::instance()->set('photo', $user['photo']);


        HTTP::redirect('/admin');

    }

    public function action_logout()
    {
        Session::instance()->destroy();
        HTTP::redirect('/');
    }

}