<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: roquie
 * Date: 19.07.13
 * Time: 18:14
 * Current file name: Controller_Uploader.php
 * 
 * All rights reserved (c) Roquie
 */
class Controller_Uploader extends Controller
{
    protected $_config = array();

    public function before()
    {
        parent::before();
        $this->_config = Kohana::$config->load('uploader')->as_array();
    }

    public function action_media()
    {
        // Get the file path from the request
        $file = $this->request->param('file');

        // Find the file extension
        $ext = pathinfo($file, PATHINFO_EXTENSION);

        // Remove the extension from the filename
        $file = substr($file, 0, -(strlen($ext) + 1));

        if ($file = Kohana::find_file('media/uploader', $file, $ext))
        {
            // Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
            $this->check_cache(sha1($this->request->uri()).filemtime($file));

            // Send the file content as the response
            $this->response->body(file_get_contents($file));

            // Set the proper headers to allow caching
            $this->response->headers('content-type',  File::mime_by_ext($ext));
            $this->response->headers('last-modified', date('r', filemtime($file)));
        }
        else
        {
            // Return a 404 status
            $this->response->status(404);
        }
    }

   public function action_uploadifive()
    {
        $uploadDir = $this->_config['upload_dir'];
        $fileTypes = $this->_config['file_types'];
        //$verifyToken = md5(md5($this->_config['salt'] . Arr::get($_POST, 'timestamp')));

        if (isset($_FILES['upl']) && /*Arr::get($_POST, 'token') === $verifyToken*/$_FILES['upl']['error'] == 0) {
            $tempFile   = $_FILES['upl']['tmp_name'];
            $targetFile = $uploadDir . $_FILES['upl']['name'];
            // Проверка типа файла
            $fileParts = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
            if (in_array(strtolower($fileParts), $fileTypes)) {
                // Сохранение
                move_uploaded_file($tempFile, $targetFile);
                echo '{"status":"success"}';
                exit;
                //echo 1;
            } else {
                echo '{"status":"error"}';
                exit;
                //echo 'Неверный тип данных';
            }
        } else {
            echo '{"status":"error"}';
            exit;
            //echo 'Соль не совпадает';
        }
    }

    public function action_check_exists()
    {
        // Define a destination
        $targetFolder = $this->_config['upload_dir']; // Relative to the root and should match the upload folder in the uploader script

        if (file_exists($targetFolder . Arr::get($_POST, 'timestamp')))
            echo 1;
         else
            echo 0;

    }
}
