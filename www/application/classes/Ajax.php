<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Ajax
 */

class Ajax
{
    /**
     * @param array $data
     * @param null $msg
     */
    public function data($data = array(), $msg = null)
    {
        $data = array();
        $data['status'] = 'success';

        if (is_null($msg))
            $data['data'] = $data;
        else {
            $data['msg'] = $msg;
            $data['data'] = $data;
        }

        echo json_encode($data);
        exit;
    }
    /**
     * нужен для вывода ответа для квери, поэтому название flash - вспышка ))
     * @param string $msg
     * @param null $status
     */
    public function msg($msg = '', $status = null)
    {
        $data = array();
        if (is_null($status))
            $data['status'] = 'success';
        else
            $data['status'] = $status;

        $data['msg'] = $msg;

        echo json_encode($data);
        exit;
    }
}