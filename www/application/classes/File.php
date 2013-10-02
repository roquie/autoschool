<?php defined('SYSPATH') OR die('No direct script access.');

class File extends Kohana_File
{
    /**
     * @param      $dir папка с файлами в которой сканировать все
     * @param null $byExt указывать расширение без точки
     *
     * @return array
     */
    public static function listFiles($dir, $byExt = null)
    {
        $data = array();
        try {
            $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
        } catch (Exception $e) {
            // короче директория не найдена
            Kohana_Exception::handler($e);
        }

        foreach ($it as $file)
            if (!$it->isDot() && !$it->isDir()) {
                if (is_null($byExt)) {
                    $data[] = $it->getPathname();
                } else {
                    $basename = pathinfo($it->getPathname(), PATHINFO_BASENAME);
                    if (strpos($basename, '.'.$byExt))
                        $data[] = $it->getPathname();
                }
            }

        return $data;
    }
}
