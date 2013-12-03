<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Admin extends Controller_Ajax_Ajax
{
    protected $_table_name = array();

    public function before()
    {
        parent::before();

        // мыло админа сайта
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        $this->auto_render = false;
        $post = $this->request->post();
        if (Kohana::$environment === Kohana::PRODUCTION)
            if (!Request::initial()->is_ajax() || empty($post))
                throw new HTTP_Exception_404();

        //так делать не хорошо, но кому не лень писать каждую новую таблицу в массив?
        $tables = Database::instance()->list_tables();

        // создание файлов моделей по списку таблиц в БД
        $this->_createAllModels($tables);
        foreach ($tables as $k => $v)
            $tables[$k] = UTF8::strtolower($v);

        $path = APPPATH.'classes/Model/';
        //список всех файлов в папке $path;
        $list = $this->_listFiles($path);

        // если список имен файлов не совпадает со списком таблиц, тогда удадить этот файл. (удалишь табл - удалится модель)
        if ($file = array_diff($list, $tables))
            foreach ($file as $val)
                if (file_exists($path.$val.EXT))
                    unlink($path.$val.EXT);
        // беру имя таблицы из ссылки
        $this->_table_name = $this->request->param('table_name');
        // проверка есть ли такая таблица в бд
        if (!empty($this->_table_name))
            if (!in_array($this->_table_name, $tables, true)) {
                $this->ajax_msg('Такой таблицы не существует', 'error');
                exit;
            }

        switch($this->request->action())
        {
            case 'create':
                Request::factory('func/crud/create')->post(
                    array(
                        'table_name' => $this->request->controller(),
                        'data' => $this->request->post()
                    )
                )->execute();
            break;

            case 'read':

                Request::factory('func/crud/read')->post(
                    array(
                        'table_name' => $this->request->controller(),
                        'id' => $this->request->param('id', '')
                    )
                )->execute();

            break;

            case 'update':
                Request::factory('func/crud/update')->post(
                    array(
                        'table_name' => $this->request->controller(),
                        'id' => $this->request->param('id')
                    )
                )->execute();
            break;

            case 'delete':
                Request::factory('func/crud/delete')->post(
                    array(
                        'table_name' => $this->request->controller(),
                        'id' => $this->request->param('id'),
                    )
                )->execute();
                break;
        }


       /* // данные из ajax.js скрипта
        $data = $this->request->post('data');
        $noreq = $this->request->post('noreq');

        // список тех методов, которые не нужно вызвать для проверки post данные на xss
        $no_check = array(
            'read',
            'delete'
        );

        if (!in_array($this->request->action(), $no_check)) {
            //  очистка всего полчученного поста от ajax.js от мусора xss
            $data_without_noreq = array();
            $noreq_clean = array();

            foreach ($data as $k => $v)
            {
                if (in_array($k, $noreq)) {
                    $noreq_clean[] = Security::xss_clean($data[$k]);
                    continue;
                }
                $data_without_noreq[$k] = $v;
            }

            if (!empty($data_without_noreq))
            {
                $this->ajax_xssclean($data_without_noreq, 'Нет данных, введите их пожалуйста');
                exit;
            }

        }*/
    }




    /**
     * генерация данных в файл модели
     * всякий мусор в $_table_columns необходм, чтобы не делать каждый раз запрос SHOW FULL COLUMNS
     * @param $tables
     */
    protected function _createAllModels($tables)
    {
        if (empty($tables)) {
            $this->ajax_msg('таблицы в бд не созданы', 'error');
            exit;
        }

        foreach ($tables as $item) {
            $columns = Database::instance()->list_columns($item);

            $modelName = UTF8::ucwords(UTF8::strtolower($item));
            $file = APPPATH.'classes/Model/'.$modelName.EXT;
/*            echo 'ok - '.$item.'<br>';
            if ($lol = preg_match('/protected \$_table_columns \= array\(/', file_get_contents($file))) {
                echo 'NUUUU';
                echo '<pre>';
                print_r($lol);
                echo '</pre>';
            }*/

            if (!file_exists($file)) {
                foreach ($columns as $column) {
                    if ($column['key'] === 'PRI')
                        $primary_key = $column['column_name'];
                }

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
    public function _listFiles($dir)
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