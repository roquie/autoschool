<?php defined('SYSPATH') OR die('No direct script access.');

class Controller extends Kohana_Controller
{

    protected $ajax = null;

    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->ajax = new Ajax();
    }

}
