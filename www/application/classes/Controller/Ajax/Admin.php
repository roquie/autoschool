<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Admin extends Controller_Ajax_Ajax
{
    protected $_table_name = array();

    public function before()
    {
        parent::before();

        // мыло админа сайта
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        //так делать не хорошо, но кому не лень писать каждую новую таблицу в массив?
        $tables = Database::instance()->list_tables();

        $this->_createAllModels($tables);

        foreach ($tables as $k => $v)
            $tables[$k] = UTF8::strtolower($v);

        $path = APPPATH.'classes/Model/';
        $list = $this->_listFiles($path);

        if ($file = array_diff($list, $tables))
            foreach ($file as $val)
                if (file_exists($path.$val.EXT))
                    unlink($path.$val.EXT);


        $this->_table_name = $this->request->param('table_name');

        if (!in_array($this->_table_name, $tables, true)) {
            $this->ajax_msg('Такой таблицы не существует', 'error');
            exit;
        }

        $post = $this->request->post();

        $this->auto_render = false;
        if (Kohana::$environment === Kohana::PRODUCTION)
            if (!Request::initial()->is_ajax() || empty($post))
                throw new HTTP_Exception_404();

    }

    public function action_create()
    {
        $result = Model::factory($this->_table_name)
                         ->addRec($this->request->post());

        if ($result) {
            $this->ajax_msg('Добавлено');
            exit;
        } else {
            $this->ajax_msg('Ошибка добавления', 'error');
            exit;
        }
    }

    public function action_read()
    {
        $id = $this->request->param('id');
        if (null === $id) {

            $result = Model::factory($this->_table_name)
                             ->all();

            if ($result) {
                $data = array();
                foreach ($result as $val)
                    $data[] = $val->as_array();

                $this->ajax_data($data);
                exit;
            } else {
                $this->ajax_msg('Ошибка чтения', 'error');
                exit;
            }
        } else {
            $result = Model::factory($this->_table_name)
                             ->getBy('id', $id);

            if ($result) {
                $this->ajax_data($result->as_array());
                exit;
            } else {
                $this->ajax_msg('Ошибка чтения', 'error');
                exit;
            }
        }
    }

    public function action_update()
    {
        $id = $this->request->param('id');
        if (null === $id) {
            $this->ajax_msg('Ошибка обновления записей', 'error');
            exit;
        } else {
            $result = Model::factory($this->_table_name)
                             ->upd($id, $this->request->post());

            if ($result) {
                $this->ajax_msg('Данные обновлены');
                exit;
            } else {
                $this->ajax_msg('Ошибка обновления', 'error');
                exit;
            }
        }

    }

    public function action_delete()
    {
        $id = $this->request->param('id');
        if (null === $id) {
            $this->ajax_msg('Ошибка удаления записи', 'error');
            exit;
        } else {
            $result = Model::factory($this->_table_name)
                ->del($id);

            if ($result) {
                $this->ajax_msg('Удалено');
                exit;
            } else {
                $this->ajax_msg('Ошибка удаления', 'error');
                exit;
            }
        }
    }

    protected function _createAllModels($tables)
    {
        if (empty($tables))
            echo 'таблицы в бд не созданы';

        foreach ($tables as $item) {
            $columns = Database::instance()->list_columns($item);

            $modelName = UTF8::ucwords(UTF8::strtolower($item));
            $file = APPPATH.'classes/Model/'.$modelName.EXT;

            if (!file_exists($file)) {
                foreach ($columns as $column) {
                    if ($column['type'] === 'string')
                        $primary_val = $column['column_name'];
                    if ($column['key'] === 'PRI')
                        $primary_key = $column['column_name'];
                }

                $content = "<?php defined('SYSPATH') or die('No direct access allowed.');
\nclass Model_". $modelName ." extends ORM
{
	protected \$_db = 'default';
    protected \$_table_name  = '".$modelName."';
    protected \$_primary_key = '$primary_key';
    protected \$_primary_val = '$primary_val';

    protected \$_table_columns = array(\n";
                foreach ($columns as $column)
                    $content .= "\t\t'". $column['column_name'] ."' => array('data_type' => '". $column['type'] ."', 'is_nullable' => ". ( ( $column['is_nullable'] ) ? "true" : "false" ) ."),\n";

                $content .= "\t);";
                $content .= "\n}";

                file_put_contents($file, $content);
            }

        }
    }

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