<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Papers extends Controller_Ajax
{

    /**
     * метод для загрузки файлов в указанную директорию
     * @type ajax
     * */
    public function action_upload_file()
    {
        $uploadDir = APPPATH.'uploads_old/downloaded/';
        $file = $uploadDir . basename($_FILES['uploadfile']['name']);

        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file))
            echo 'success';
        else
            echo 'error';
    }




}