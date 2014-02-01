<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template
{

    /**
     *
     * @param array $arr
     * @param null $msg
     * @param null $status
     * @internal param array $data
     */
    protected function ajax_data($arr = array(), $msg = null, $status = null)
    {
        $data = array();
        if (is_null($status))
            $data['status'] = 'success';
        else
            $data['status'] = $status;
        if (is_null($msg))
            $data['data'] = $arr;
        elseif(is_array($msg)) {
            $data['title'] = $msg[0];
            $data['msg'] = $msg[1];
            $data['data'] = $arr;
        } else {
            $data['msg'] = $msg;
            $data['data'] = $arr;
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
