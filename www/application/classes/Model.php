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
     * @param array $data
     * @param array $only
     *
     * @return bool
     */
    public function addRec(array $data, array $only = null)
    {
        $result = ORM::factory(Model::$_model_name)
                      ->values($data, $only)
                      ->create();

        if ($result->loaded())
            return true;
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
     * @param       $id
     * @param       $data
     * @param array $only
     *
     * @return bool
     */
    public function upd($id, $data, array $only = null)
    {
        $result = ORM::factory(Model::$_model_name, $id)
                    ->values($data, $only)
                    ->update();

        if ($result->loaded())
            return true;
        else
            return false;

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
