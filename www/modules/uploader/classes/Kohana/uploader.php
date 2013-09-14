<?php
/**
 * Created by JetBrains PhpStorm.
 * User: roquie
 * Date: 19.07.13
 * Time: 15:18
 * Current file name: uploader.php
 * 
 * All rights reserved (c) Roquie
 */
class Kohana_Uploader
{
    //private $_config = null;

    public static function factory(array $config = array())
    {
        return new Uploader($config);
    }

    public function __construct(array $config = array())
    {
        $this->_config = Kohana::$config->load('uploader')->as_array();
    }

    public function getUploadForm()
    {
        $cfg = $this->_config;
        //require Kohana::find_file('view/uploader', 'index', 'php');
      return View::factory('uploader/qwe')->render(); // It's working =) имя папки с вьюшками надо называть не 'view', а 'views'
        // (old)- not working :((
    }


}