<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Backup extends Controller_Ajax
{

    public function action_create()
    {
        $path = APPPATH.'output_blanks/zayavleniya/';
        $files = $this->getFilesFullPath($path);
        $zip = new ZipArchive();

        $fileName = APPPATH.'backups/backup_'.date('j_m_Y_h_i_s').'.zip';

        if ($zip->open($fileName, ZIPARCHIVE::CREATE) !== true)
            $this->ajax_msg('Ошибка создания бэкапа', 'error');


        foreach ($files as $file)
            $zip->addFile($file, basename($file));


        $zip->close();

        $this->ajax_msg('Файл успешно создан!');

    }

    protected function getFilesFullPath($path)
    {
        $data = array();
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

        foreach ($it as $file)
            if (!$it->isDot() && !$it->isDir()) {
                $basename = pathinfo($it->getPathname(), PATHINFO_BASENAME);
                if (strpos($basename, '.docx'))
                    $data[] = $it->getPathname();
            }

        return $data;
    }




}