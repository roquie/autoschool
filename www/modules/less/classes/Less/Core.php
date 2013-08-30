<?php defined('SYSPATH') or die('No direct script access.');

class Less_Core
{
	protected $_config = array();

    public static function factory()
    {
        return new Less_Core();
    }

    public function __construct()
    {
        $this->_config = Kohana::$config->load('less');
    }

    /**
     * Компиляция всех less в один css
     * @param null $files
     * @return array
     */
    public function compile($files = null)
    {
        if (is_null($files))
            $lessFullPath = $this->_getLessFilesFullPath($this->_config['pathToLessFiles']);
        else
            $lessFullPath = $files;

        if (empty($lessFullPath))
            return $this->_html_comment('файлов *.less не обнаружено в "'.$this->_config['pathToLessFiles'].'" этой папке');

        if (Kohana::$environment === Kohana::DEVELOPMENT) {
            $data = '';
            foreach($lessFullPath as $file)
                $data .= "\n".file_get_contents($file);

            $less = new lessc();
            try {

                if ($this->_config['compress'])
                    file_put_contents($this->_config['compiledOutput'], $this->_compress($less->compile($data)));
                else
                    file_put_contents($this->_config['compiledOutput'], $less->compile($data));

            } catch (LessException $ex) {
                $ex->getMessage();
            }
        }
        return HTML::style($this->_config['pathCssForBrowser']);
    }


    /**
     * рекурсивно сканирую все файлы на наличие *.less файлов
     * @param $path
     * @return array
     */

    protected function _getLessFilesFullPath($path)
    {
        $data = array();
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

        foreach ($it as $file)
            if (!$it->isDot() && !$it->isDir()) {
                $basename = pathinfo($it->getPathname(), PATHINFO_BASENAME);
                if (strpos($basename, '.less'))
                    $data[] = $it->getPathname();
            }

        return $data;
    }

    /**
     * сжатие css файла
     *
     * @param $data
     * @return mixed
     */
    protected static function _compress($data)
	{
		$data = preg_replace('~/\*[^*]*\*+([^/][^*]*\*+)*/~', '', $data);
		$data = preg_replace('~\s+~', ' ', $data);
		$data = preg_replace('~ *+([{}+>:;,]) *~', '$1', trim($data));
		$data = str_replace(';}', '}', $data);
		$data = preg_replace('~[^{}]++\{\}~', '', $data);

		return $data;
	}

    /**
     * @param string $string
     * @return string
     */
    protected function _html_comment($string = '')
	{
		return '<!-- '.$string.' -->';
	}

}
