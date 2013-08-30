<?php
final class GOAuth
{


    private $urlAuth = 'https://accounts.google.com/o/oauth2/auth';
    private $urlToken = 'https://accounts.google.com/o/oauth2/token';

    private $_config = array();


    public static function factory(array $config = array())
    {
        return new GOAuth($config);
    }

    public function __construct(array $config = array())
    {
        $this->_config = Kohana::$config->load('goauth')->as_array();
    }

    public function getAuthData()
    {

        $params = array(
            'redirect_uri'  =>  $this->_config['redirect_uri'],
            'response_type' => 'code',
            'client_id'     =>  $this->_config['client_id'],
            'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/drive'
        );

        HTTP::redirect($this->urlAuth . '?' . urldecode(http_build_query($params)));
    }

    private function _postRequest($params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->urlToken);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            if (curl_error($ch) === '') {
                $result = curl_exec($ch);
                curl_close($ch);
                return json_decode($result, true);
            } else {
                throw new GOAuthException('При отправке данных гуглу возникла ошибка: '. curl_error($ch));
            }
    }

    private function _getRequest($params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/oauth2/v1/userinfo' . '?' . urldecode(http_build_query($params)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            if (curl_error($ch) === '') {
                $result = curl_exec($ch);
                curl_close($ch);
                return json_decode($result, true);

            } else {
                throw new GOAuthException('При запросе пользовательских данных возникла ошибка: '. curl_error($ch));
            }

    }

    public function getUserData($code)
    {
        if(!isset($code)) {
            throw new GOAuthException('Не получен код ответа от гугла ($_GET параметр code) ИЛИ нажата кнопка отмены');
            // HTTP::redirect(URL::site());
        }

        $params = array(
            'code'          => $code,
            'client_id'     => $this->_config['client_id'],
            'client_secret' => $this->_config['client_secret'],
            'redirect_uri'  => $this->_config['redirect_uri'],
            'grant_type'    => 'authorization_code',
        );

        $tokenInfo = $this->_postRequest($params);

        if (array_key_exists('error', $tokenInfo)) {
                throw new GOAuthException('Ошибка авторизации: '.$tokenInfo['error']);
        }


        $params['access_token'] = $tokenInfo['access_token'];
        $userInfo = $this->_getRequest($params);

        if (empty($userInfo['picture'])) {
            $userInfo['picture'] = $this->_config['none_avatar_img'];
        }

        return $userInfo;

    }



}

class GOAuthException extends Exception {}




