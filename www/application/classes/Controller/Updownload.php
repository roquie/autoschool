<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Updownload extends Controller_Main
{

    public function action_google()
    {
        Google::factory()->upload_file('output_blanks/zayavleniya/zayavlenie_30_08_2013_03_53_30.docx');
        echo 'its work!';
    }


    public function action_download()
    {
        $folder = $this->request->param('folder');
        $filename = $this->request->param('filename');
        $format = $this->request->param('format');

        $this->response->headers(
            'Content-type', File::mime_by_ext('docx')
        );

        $this->response->send_file(APPPATH.'output_blanks/'.$folder.'/'.$filename.'.'.$format);
    }


    public function action_upload()
    {
        $type = $this->request->param('type');
        $filename = $this->request->param('filename');
        $format = $this->request->param('format');

        $this->response->send_file(APPPATH.'uploads_old/'.$type.'/'.$filename.'.'.$format);
    }


}