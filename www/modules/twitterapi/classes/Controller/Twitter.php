<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Twitter extends Controller
{
    public function action_tweets()
    {
        $tweets = Twitter::factory()->getTweets();
        echo View::factory('tweets', array(
            'tweets' => $tweets
        ))->render();
    }

}
