<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller extends Kohana_Controller
{
    public $_transactional = true;

    /**
     * отправляет json ответ с данными, кот. в массиве data
     * example {"status":"success","data":{"asd":"111ss"},"msg":{"title":"lol","msg":"blya"},"csrf":"8muBJ04\/PrJ50kUtcXxcIYH\/dE5Q5lD1xpuPX\/Dgh4c="}
     * @param array $data
     * @param $message
     * @param string $status
     */
    protected function ajax_data($data = array(), $message = '', $status = 'success')
    {
        $message = is_string($message) ? $message : array('title' => $message[0], 'msg' => $message[1]) ;

        $response = array(
            'status' => $status,
            'data' => $data,
            'msg' => $message,
            'csrf' => Security::token(true)
        );

        echo json_encode($response);
        exit;
    }

    /**
     * отправляет json ответ: success/error
     * example {"status":"success","msg":"aassad","csrf":"BwIPR8wQZRGSockslJjy9IfMmb4VKGhwyGJH3enUnrw="}
     * @param $message
     * @param string $status
     */
    protected function ajax_msg($message, $status = 'success')
    {
        $message = is_string($message) ? $message : array('title' => $message[0], 'msg' => $message[1]) ;

        $response = array(
            'status' => $status,
            'msg' => $message,
            'csrf' => Security::token(true)
        );

        echo json_encode($response);
        exit;
    }
}
