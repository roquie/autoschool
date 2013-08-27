<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template
{
    public $template = 'main/layout';


    public function before()
    {
        parent::before();


        /*$files = array(

            APPPATH.'media/less/vendor/html5b/main.less',
            APPPATH.'media/less/vendor/html5b/normalize.less',
            APPPATH.'media/less/vendor/bootstrap/bootstrap.min.less',
            //APPPATH.'media/less/style.less',
            //APPPATH.'media/less/vendor/stylizationForm.less',
            APPPATH.'media/less/vendor/fontawesome/font-awesome.min.less'
        );

        $this->template->less = Less::factory()->compile($files);*/

        //'<link href="http://localhost/css/output.css" rel="stylesheet" /> ';//

        $this->template->title = 'МПТ Автошкола';

        $this->template->navbar = View::factory('main/navbar');
        $this->template->content = '';
        $this->template->footer = View::factory('main/footer');

    }

    public function action_after()
    {

    }




}