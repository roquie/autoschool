<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Ajax
 * @todo - переделать класс чуть иначе $this->ajax('msg', 'error')->title('lol')->data(array('etc'));
 */

class Controller_Ajax extends Controller
{

    /**
     * @throws HTTP_Exception_404
     */
    public function before()
    {
        parent::before();

        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        $this->auto_render = false;
        if (Kohana::$environment === Kohana::PRODUCTION)
            if (!Request::initial()->is_ajax())
                throw new HTTP_Exception_404();

    }

    /**
     * @param array $array
     * @param string $msg_error
     */
    protected function ajax_xssclean($array = array(), $msg_error = '')
    {
        $cleans = Security::xss_clean($array);

        $emptyKeys = array();
        foreach ($cleans as $key => $value)
            if (empty($value))
                $emptyKeys[] = $key;

        $this->ajax_data($emptyKeys, $msg_error,  'error');
    }

    /**
     *
     * @param array $data
     * @param null $msg
     * @param null $status
     */
    protected function ajax_data($data = array(), $msg = null, $status = null)
    {
        $data = array();
        if (is_null($status))
            $data['status'] = 'success';
        else
            $data['status'] = $status;

        if (is_null($msg))
            $data['data'] = $data;
        elseif(is_array($msg)) {
            $data['title'] = $msg[0];
            $data['msg'] = $msg[1];
            $data['data'] = $data;
        } else {
            $data['msg'] = $msg;
            $data['data'] = $data;
        }

        echo json_encode($data);
        exit;
    }

    /**
     * нужен для вывода ответа для квери
     *
     * $this->ajax_msg("asdsd");
     * $this->ajax_msg(array("title", "msg"), 'error');
     *
     * @param string $msg
     * @param null $status
     */
    protected function ajax_msg($msg = '', $status = null)
    {
        $data = array();
        if (is_null($status))
            $data['status'] = 'success';
        else
            $data['status'] = $status;

        if (is_array($msg)) {
            $data['title'] = $msg[0];
            $data['msg'] = $msg[1];
        } else
            $data['msg'] = $msg;

        echo json_encode($data);
        exit;
    }


}