<?php defined('SYSPATH') or die('No direct script access.');


class Gmodeler
{
    protected $_table_name = array();

    /**
     * @return bool
     * @throws HTTP_Exception_404
     */
    public static function init()
    {
        $post = Request::initial()->post();
        if (Kohana::$environment === Kohana::PRODUCTION)
            if (!Request::initial()->is_ajax() || empty($post))
                throw new HTTP_Exception_404();

        //так делать не хорошо, но кому не лень писать каждую новую таблицу в массив?
        $tables = Database::instance()->list_tables();

        // создание файлов моделей по списку таблиц в БД
        static::_createAllModels($tables);
        foreach ($tables as $k => $v)
            $tables[$k] = UTF8::strtolower($v);

        $path = APPPATH.'classes/Model/';
        //список всех файлов в папке $path;
        $list = static::_listFiles($path);

        // если список имен файлов не совпадает со списком таблиц, тогда удадить этот файл. (удалишь табл - удалится модель)
        if ($file = array_diff($list, $tables))
            foreach ($file as $val)
                if (file_exists($path.$val.EXT))
                    unlink($path.$val.EXT);

        return true;
    }


    /**
     * генерация данных в файл модели
     * всякий мусор в $_table_columns необходм, чтобы не делать каждый раз запрос SHOW FULL COLUMNS
     * @param $tables
     * @throws RuntimeException
     */
    protected static function _createAllModels($tables)
    {
        if (empty($tables))
            throw new \InvalidArgumentException('таблицы в бд не созданы');


        foreach ($tables as $item) {
            $columns = Database::instance()->list_columns($item);

            $modelName = UTF8::ucwords(UTF8::strtolower($item));
            $file = APPPATH.'classes/Model/'.$modelName.EXT;

            if (!file_exists($file)) {
                foreach ($columns as $column) {
                    if ($column['key'] === 'PRI')
                        $primary_key = $column['column_name'];
                }
            if(empty($primary_key))
                throw new \RuntimeException('в какойто таблице не указан первичный ключ');

                $content = "<?php defined('SYSPATH') or die('No direct access allowed.');
\nclass Model_". $modelName ." extends ORM
{
	protected \$_db = 'default';
    protected \$_table_name  = '".$modelName."';
    protected \$_primary_key = '$primary_key';

    protected \$_table_columns = array(\n";
                foreach ($columns as $column)
                    $content .= "\t\t'". $column['column_name'] ."' => array('data_type' => '". $column['type'] ."', 'is_nullable' => ". ( ( $column['is_nullable'] ) ? "true" : "false" ) ."),\n";

                $content .= "\t);";
                $content .= "\n}";

                file_put_contents($file, $content);
            }

        }
    }

    /**
     * Файлы без php расширения
     * @param $dir
     *
     * @return array
     */
    protected static function _listFiles($dir)
    {
        $data = array();
        try {
            $it = new DirectoryIterator($dir);
        } catch (Exception $e) {
            // короче директория не найдена
            Kohana_Exception::handler($e);
        }

        foreach ($it as $file)
            if (!$it->isDot() && !$it->isDir())
                $data[] = UTF8::strtolower($it->getBasename('.php'));

        return $data;
    }


}