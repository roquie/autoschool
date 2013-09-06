<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Developer: Roquie
 * DateTime: 04.09.13 17:19
 * Current file name: Template_Docx.php
 * 
 * All rights reserved (c)
 */

class Template_TemplateDocx
{
    /**
     * местоположение распакованных файлов
     * @var string
     */
    protected $_files = '';

    /**
     * исходник где поменять значения
     * @var null
     */
    protected $_source = null;

    /**
     * тута объект для встроенного в php класса ZipArchive
     * @var null|ZipArchive
     */
    protected $_zip = null;

    /**
     * word xml содержимое документа
     * @var string
     */
    protected $_content = '';

    /**
     * Проверка на вшивость и заполнения глобальных переменных данными
     * @param $source
     * @throws TemplatedocxException
     */
    public function __construct($source)
    {
        if (extension_loaded('zip') === true)
            if (is_readable($source) === true)
            {
                $this->_source = $source;
                $this->_files = pathinfo($source, PATHINFO_DIRNAME).'/'.pathinfo($source, PATHINFO_FILENAME).'/';
                $this->_zip = new ZipArchive();
                $this->_content = $this->_unzip();
            }
            else throw new TemplatedocxException('Файла нет/не читается');
        else throw new TemplatedocxException('Расширение ZIP не установлено');
    }

    /**
     * распаковка исходного файла
     * @return string
     */
    protected function _unzip()
    {
        if ($this->_zip->open($this->_source) === true) {
            $this->_zip->extractTo($this->_files); // куда извлечь
            $this->_zip->close();
        }

        return file_get_contents($this->_files.'word/document.xml');
    }

    /**
     * поик переменной вида ${param} и замена его $replace
     * @param $search
     * @param $replace
     */
    public function setValue($search, $replace)
    {
        $this->_content = preg_replace('/'.$search.'/', $replace, $this->_content);
    }


    /**
     * говнокод!
     * архивирование временной папки с файлами, которые в docx
     * @param $src_dir
     * @param $zip
     * @param string $dir_in_archive
     * @return mixed
     */
    protected function _zipping($src_dir, $zip, $dir_in_archive='')
    {
        $dirHandle = opendir($src_dir);
        while (false !== ($file = readdir($dirHandle))) {
            if ($file !== '.' && $file !== '..') {
                if (!is_dir($src_dir.$file)) {
                    $zip->addFile($src_dir.$file, $dir_in_archive.$file);
                } else {
                    $zip->addEmptyDir($dir_in_archive.$file);
                    $zip = $this->_zipping($src_dir.$file.'/',$zip,$dir_in_archive.$file.'/');
                }
            }
        }
        return $zip;
    }

    /**
     * сохраненеи файла путем его архивирования и записи изменений
     * @param $fileName
     * @throws TemplatedocxException
     */
    public function save($fileName)
    {
        if (!is_readable($dir = pathinfo($fileName, PATHINFO_DIRNAME)))
            throw new TemplatedocxException('Запись в папку '.$dir.' невозможна');

        file_put_contents($this->_files.'word/document.xml', $this->_content);

        if ($this->_zip->open($fileName, ZIPARCHIVE::CREATE) !== true)
            throw new TemplatedocxException('Ошибка при создании архива');

        $obj = $this->_zipping($this->_files, $this->_zip);
        $obj->close();

       $this->deleteLocalDir($this->_files);
    }

    /**
     * удаленеи временных файлов
     * @param $path
     * @return bool
     */
    protected function deleteLocalDir($path)
    {
        $data = array();
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);

        foreach ($it as $file)
            if ($file->isDir())
                rmdir($file->getPathname());
            elseif ($file->isFile() || $file->isLink())
                unlink($file->getPathname());

        $handle = opendir($path);
        closedir($handle);
        return rmdir($path);
    }

}

/**
 * Эксепшн для ошибок текущего класса
 * Class TemplatedocxException
 */
class TemplatedocxException extends Kohana_Kohana_Exception {}