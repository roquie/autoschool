<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Settings extends Model
{

    public function load()
    {
        return DB::select()
                 ->from('Settings')
                 ->as_object()
                 ->execute()
                 ->as_array('name', 'value');
    }


    public function add($name, $value)
    {
        try {
            $results = DB::insert('Settings',
                array('name', 'value'))
                ->values(array($name, $value))
                ->execute();

            return $results;
        }
        catch(Exception $e)
        {
            return false;
        }
    }


    public function set($name, $value)
    {
        try {
            $data = array(
                'value' => $value,
            );

            $result = DB::update('Settings')
                ->set($data)
                ->where('name', '=', $name)
                ->execute();

            return $result;
        }
        catch(Exception $e)
        {
            return false;
        }
    }


    public function get($name)
    {
        $results = DB::select()
            ->from('Settings')
            ->where('name', '=', $name)
            ->as_object()
            ->execute();

        return count($results) > 0 ? $results[0]->value : null;
    }
}