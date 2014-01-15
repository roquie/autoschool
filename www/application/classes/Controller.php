<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller extends Kohana_Controller
{

    protected $ac_table_name = null;

    public function execute()
    {
        // Execute the "before action" method
        $this->before();

        $this->autocrud();

        // Determine the action to use
        $action = 'action_'.$this->request->action();

        // If the action doesn't exist, it's a 404
        if ( ! method_exists($this, $action))
        {
            throw HTTP_Exception::factory(404,
                'The requested URL :uri was not found on this server.',
                array(':uri' => $this->request->uri())
            )->request($this->request);
        }

        // Execute the action itself
        $this->{$action}();

        // Execute the "after action" method
        $this->after();

        // Return the response
        return $this->response;
    }

    protected function autocrud()
    {
           /* if (in_array($this->request->controller(), Database::instance()->list_tables())) {
                $this->ac_table_name = $this->request->controller();
            }*/

    if(!empty($this->ac_table_name))
        switch($this->request->action())
        {
            case 'create':
                Request::factory('func/crud/create')->post(
                    array(
                        'table_name' => $this->ac_table_name,
                        'data' => $this->request->post('data')
                    )
                )->execute();
            break;

            case 'read':

                Request::factory('func/crud/read')->post(
                    array(
                        'table_name' => $this->ac_table_name,
                        'id' => $this->request->param('id', '')
                    )
                )->execute();

            break;

            case 'update':
                Request::factory('func/crud/update')->post(
                    array(
                        'table_name' => $this->ac_table_name,
                        'id' => $this->request->param('id')
                    )
                )->execute();
            break;

            case 'delete':
                Request::factory('func/crud/delete')->post(
                    array(
                        'table_name' => $this->ac_table_name,
                        'id' => $this->request->param('id'),
                    )
                )->execute();
            break;
        }
    }
}
