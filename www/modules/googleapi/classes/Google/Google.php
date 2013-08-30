<?php defined('SYSPATH') or die('No direct script access.');

class Google_Google
{

    /**
     * @var array
     */
    protected $_config = array();

    /**
     * @var Google_Client|null
     */
    protected $_client = null;

    /**
     * @var Google_DriveService|null
     */
    protected $_service = null;

    public function __construct()
    {
       $this->_config = Kohana::$config->load('googleapi')->as_array();
       $this->_client =  new Google_Client();
       $this->_service = new Google_DriveService($this->_client);
    }

    /**
     * @return Google
     */
    public static function factory()
    {
        return new Google();
    }

    /**
     * @param $response_code
     * @return Google_Userinfo
     */
    public function auth($response_code)
    {
        $this->_client->setApplicationName($this->_config['app_name']);
        $this->_client->setClientId($this->_config['client_id']);
        $this->_client->setClientSecret($this->_config['client_secret']);
        $this->_client->setRedirectUri($this->_config['redirect_uri']);
        $this->_client->setScopes($this->_config['scopes']);

        $oauth2 = new Google_Oauth2Service($this->_client);

        if (!empty($response_code)) {
            $this->_client->authenticate($response_code);
            Session::instance()->set('token', $this->_client->getAccessToken());
            HTTP::redirect($this->_config['redirect_uri']);
        }

        $token = Session::instance()->get('token');
        if (isset($token))
            $this->_client->setAccessToken($token);


        if ($this->_client->getAccessToken()) {
            $userInfo = $oauth2->userinfo->get();
            Session::instance()->set('token', $this->_client->getAccessToken());
        } else
            HTTP::redirect($this->_client->createAuthUrl());

        Session::instance()->set('email', $userInfo['email']);
        Session::instance()->set('first_name', $userInfo['given_name']);
        Session::instance()->set('last_name', $userInfo['family_name']);
        Session::instance()->set('photo', $userInfo['picture']);

        if (empty($userInfo['picture']))
            $userInfo['picture'] = $this->_config['none_avatar_img'];

        return $userInfo;
    }


    /**
     * $path param without APPPATH
     * @param $path
     * @param string $description
     * @param string $mimeType
     */
    public function upload_file($path, $description = 'Заявление МПТ', $mimeType = 'application/msword')
    {
        $path = APPPATH.$path;
        $file = new Google_DriveFile();

        $file->setTitle(basename($path));
        $file->setDescription($description);
        $file->setMimeType($mimeType);
        echo '<pre>';
        print_r($path);
        echo '</pre>';
        echo '<pre><br>';
        print_r($file);
        echo '</pre><br>';
        echo '<pre>';
        print_r($this->_service);
        echo '</pre>';
        $qwe = $this->_service->files->insert($file, array(
            'data' => file_get_contents($path),
            'mimeType' => $mimeType,
        ));



        echo '<pre>';
        print_r($qwe);
        echo '</pre>';

    }


}