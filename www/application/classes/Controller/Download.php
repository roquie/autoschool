<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Download extends Controller_Main
{

    public function action_index()
    {
        $folder = $this->request->param('folder');
        $filename = $this->request->param('filename');
        $format = $this->request->param('format');

        $this->response->send_file(APPPATH.'output_blanks/'.$folder.'/'.$filename.'.'.$format);
    }

    public function action_after_del()
    {
        $folder = $this->request->param('folder');
        $filename = $this->request->param('filename');
        $format = $this->request->param('format');

        $this->response->send_file(APPPATH.'output_blanks/'.$folder.'/'.$filename.'.'.$format, null, array(
            'delete' => true
        ));
    }

}