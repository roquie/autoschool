<?php defined('SYSPATH') or die('No direct script access.');

class Twitter_Twitter
{
    /**
     * @var array
     */
    protected $_config = array();

    /**
     * @var null
     */
    protected $_twitter = null;

    public function __construct()
    {
        $this->_config = Kohana::$config->load('twitterapi')->as_array();
        $this->_twitter =  new TwitterOAuth($this->_config['consumer_key'], $this->_config['consumer_secret'], $this->_config['oauth_token'],$this->_config['oauth_token_secret']);
    }

    /**
     * @return Twitter
     */
    public static function factory()
    {
        return new Twitter();
    }

    /**
     * Получение твитов
     * @return API|mixed
     */
    public function getTweets()
    {
        /**
         * Постинг твитов
         * $account = $this->_twitter->get('account/verify_credentials');
         * $status = $this->_twitter->post('statuses/update', array('status' => 'f status here'));
         */
        $tweets = $this->_twitter->get('statuses/user_timeline', array(
            'screen_name' => $this->_config['screen_name'],
            'count' => $this->_config['count_tweets']
        ));
        return $tweets;
    }

}