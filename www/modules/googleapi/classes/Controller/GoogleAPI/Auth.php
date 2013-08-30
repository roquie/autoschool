<?php defined('SYSPATH') or die('No direct script access.');

class Controller_GoogleAPI_Auth extends Controller
{
  /*  public $client = null;

    public function before()
    {
        $this->client = new Google_Client();
    }*/

    public function action_google()
    {
        $email = Session::instance()->get('email');
        if (!isset($email)) {
            $userInfo = Google::factory()->auth($this->request->query('code'));

            $verifyEmail = Model::factory('Admin_PreReg')->getOneEmail($userInfo['email']);
            if (empty($verifyEmail)) HTTP::redirect('/');

            HTTP::redirect('/admin');
        }
        else
            HTTP::redirect('/admin');
    }


    public function action_logout()
    {
        Session::instance()->destroy();
       // $this->client->revokeToken();
        HTTP::redirect('/');
    }

}