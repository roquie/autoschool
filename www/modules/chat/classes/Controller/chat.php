<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Chat extends Controller_Ajax_Main
{
    private $_config;

    public function before()
    {
        parent::before();

        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('/');
        $this->_config = Kohana::$config->load('chat')->as_array();
    }

    /**
     * отображение страницы личного кабинета "Помощь"
     */
    public function action_help()
    {
        echo View::factory('view', array(
            'messages' => View::factory('load', array(
                'messages' => Model::factory('Message')->getMessage(Cookie::get('userId')),
                'config' => $this->_config,
            ))->render(),
            'userPhoto' =>   Cookie::get('userPhoto'),
        ))->render();
    }

    /**
     * Добавление нового сообщения
     */
    public function action_add()
    {
        //<script>alert('qwe');</script>
        $message = Security::xss_clean($this->request->post('message'));
        if (!$message) {
            $this->ajax_msg('','empty');
            exit;
        }
        $result = Model::factory('Message')->addMessage(array(
            'user_id' => Cookie::get('userId'),
            'message' => $message
        ));
        if (!$result) {
            $this->ajax_msg('Ошибка при добавлении сообщения','error');
            exit;
        }
        $this->ajax_msg(
            View::factory('message', array(
                'config' => $this->_config,
                'message' => $message,
                'admin' => $this->request->post('admin'),
                'userPhoto' =>   Cookie::get('userPhoto'),
            ))->render()
        );
    }

    /**
     * Дозагрузка сообщений при скроллинге
     */
    public function action_load()
    {
        $result = Model::factory('Message')->getMessage(Cookie::get('userId'), $this->request->post('offset'));

        //$result = $result->as_array();
        $data = $result->as_array();
        if (empty($data)) {
            $this->ajax_msg('', 'empty');
            exit;
        }
        $this->ajax_msg(
            View::factory('load', array(
                'messages' => $result,
                'config' => $this->_config,
            ))->render()
        );
    }

    /**
     * Удаление истории
     */
    public function action_clear()
    {
        $result = Model::factory('Message')->delMessage(Cookie::get('userId'));
        if (!$result) {
            $this->ajax_msg('Ошибка при удалении истории','error');
            exit;
        }
        $this->ajax_msg('');
    }

}