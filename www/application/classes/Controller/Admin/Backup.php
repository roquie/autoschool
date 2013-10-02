<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Backup extends Controller_Ajax_Admin
{

    public function action_create()
    {
        $path = APPPATH.'output_blanks/zayavleniya/';
        $files = File::listFiles($path, 'docx');
        $zip = new ZipArchive();

        $fileName = APPPATH.'backups/backup_'.date('j_m_Y_h_i_s').'.zip';

        if ($zip->open($fileName, ZIPARCHIVE::CREATE) !== true)
            $this->ajax_msg('Ошибка создания бэкапа', 'error');


        foreach ($files as $file)
            $zip->addFile($file, basename($file));


        $zip->close();

        $this->ajax_msg('Файл успешно создан!');

    }



}