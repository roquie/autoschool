<?php defined('SYSPATH') OR die('No direct script access.');

class Model extends Kohana_Model
{
    protected static $_model_name = '';

    /**
     * Create a new model instance.
     *
     *     $model = Model::factory($name);
     *
     * @param   string  $name   model name
     * @return  Model
     */
    public static function factory($name)
    {
        Model::$_model_name = $name;
        // Add the model prefix
        $class = 'Model_'.$name;
        return new $class;
    }

    /**
     * @param string $order_by
     *
     * @return Database_Result
     */
    public function all($order_by = 'asc')
    {
        $data = ORM::factory(Model::$_model_name)
            ->order_by('id', $order_by)
            ->find_all();

        if ($data->count() > 0)
            return $data;
        else
            return false;
    }

    /**
     * @param        $where
     * @param        $value
     * @param string $order_by
     *
     * @return bool|Database_Result
     */
    public function allWhere($where, $value, $order_by = 'asc')
    {
        $data = ORM::factory(Model::$_model_name)
            ->where($where, '=', $value)
            ->order_by('id', $order_by)
            ->find_all();

        if ($data->count() > 0)
            return $data;
        else
            return false;
    }


    /**
     * @param array $data
     * @param array $only
     *
     * @return int
     */
    public function addRec(array $data, array $only = null)
    {
        $result = ORM::factory(Model::$_model_name)
                      ->values($data, $only)
                      ->create();

        if ($result->loaded())
            return $result->pk();
        else
            return false;
    }

    /**
     * @param $where
     * @param $value
     *
     * @return ORM
     */
    public function getBy($where, $value)
    {
        $data = ORM::factory(Model::$_model_name)->where($where, '=', $value)->find();

        if ($data->loaded())
            return $data;
        else
            return false;

    }

    /**
     * @param mixed $field
     * @param       $data
     * @param array $only
     *
     * @internal param $id
     * @return bool
     */
    public function upd($field, $data, array $only = null)
    {

        if (is_numeric($field)) {
            $model = ORM::factory(Model::$_model_name, $field)
                         ->values($data, $only)
                         ->update();
            if ($model->loaded())
                return true;
            else
                return false;
        } elseif(is_array($field)) {
            $db = DB::update(Model::$_model_name)
                    ->value($data[0], $data[1])
                    ->where($field[0], '=', $field[1])
                    ->execute();
            if ($db)
                return true;
            else
                return false;
        }



    }

    /**
     * @param $id
     *
     * @return bool
     */
    public function del($id)
    {
        $result = ORM::factory(Model::$_model_name, (int)$id);

        if ($result->loaded()) {
            $result->delete();
            return true;
        } else {
            return false;
        }

    }



}
