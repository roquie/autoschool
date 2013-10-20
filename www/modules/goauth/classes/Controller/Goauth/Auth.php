<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Goauth_Auth extends Controller
{
    public function action_login()
    {
        $email = Session::instance()->get('email');
        if (!isset($email))
            Goauth::factory()->getAuthData();
        else
            HTTP::redirect('/');
    }

    public function action_goauth()
    {
        $userInfo = Goauth::factory()->getUserData($this->request->query('code'));
        $firstAndLastNames = explode(' ', $userInfo['name']);

        $data = Model::factory('Administrators')->getBy('email', $userInfo['email']);
        if (!$data)
            HTTP::redirect('/');
        else {
            Session::instance()->set('email', $userInfo['email']);
            Session::instance()->set('first_name', $firstAndLastNames[0]);
            Session::instance()->set('last_name', $firstAndLastNames[1]);
            Session::instance()->set('photo', $userInfo['picture']);

            HTTP::redirect('/admin');
        }

    }

    public function action_logout()
    {
        Session::instance()->destroy();
        HTTP::redirect('/');
    }

}