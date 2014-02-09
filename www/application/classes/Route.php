<?php defined('SYSPATH') OR die('No direct script access.');

class Route extends Kohana_Route
{

    /**
     * example Route::to('admin.ajax', 'listeners#contract_gen');
     * @param $name
     * @param null $params
     * @param null $protocol
     * @return string
     */
    public static function to($name, $params = NULL, $protocol = NULL)
    {
        $route = Route::get($name);

        if (is_string($params))
        {
            $result = explode('#', $params);
            $params = array(
                'controller' => $result[0],
                'action' => $result[1],
            );
        }

        if ($route->is_external())
            return $route->uri($params);
        else
            return URL::site($route->uri($params), $protocol);
    }
}
