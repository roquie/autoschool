<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Ajax
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
        if (!Request::initial()->is_ajax())
            throw new HTTP_Exception_404();
    }

    /**
     *
     * @param array $data
     * @param null $msg
     */
    protected function ajax_data($data = array(), $msg = null)
    {
        $data = array();
        $data['status'] = 'success';

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