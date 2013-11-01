<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 24.10.13
 * Time: 20:35
 */
//sleep(3);
/*foreach($_POST['data'] as $key => $value) {
//    if (!in_array($key, $_POST['noreq'])) {
        file_put_contents('qwe.txt', $value."\n", FILE_APPEND);
//    }
}*/
echo json_encode(array(
    'status' => 'success',
    'msg' => 'ЗБС'
));