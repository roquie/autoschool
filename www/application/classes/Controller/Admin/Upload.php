<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Upload extends Controller_Admin
{


    public function action_upload()
    {
        $type = $this->request->param('type');
        $filename = $this->request->param('filename');
        $format = $this->request->param('format');

        $this->response->send_file(APPPATH.'uploads/'.$type.'/'.$filename.'.'.$format);
    }

    public function action_newupload()
    {

    }


}