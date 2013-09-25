<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Ajax extends Controller
{

    /**
     * @param array $array
     * @param string $msg_error
     * @return bool
     */
    protected function ajax_xssclean($array = array(), $msg_error = '')
    {
        $cleans = Security::xss_clean($array);

        $emptyKeys = array();
        foreach ($cleans as $key => $value)
            if (empty($value))
                $emptyKeys[] = $key;
        if ( !empty($emptyKeys) )
            $this->ajax_data($emptyKeys, $msg_error,  'empty');
        else
            return false;

        return true;
    }

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