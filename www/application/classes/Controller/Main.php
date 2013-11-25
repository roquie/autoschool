<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template
{
    public $template = 'main/layout';


    public function before()
    {
        parent::before();

        $this->template->title = 'МПТ Автошкола';

        $this->template->navbar = View::factory('main/navbar');
        $this->template->content = '';
        $this->template->footer = View::factory('main/footer');

    }

    public function action_index()
    {
        $bform = new Botobor_Form(View::factory('main/contact/form')->set('captcha',Captcha::instance()->render()));
        $contact = $bform->getCode();
        $this->template->content =
            View::factory('main/index')
                 ->set('contactForm', $contact);
    }

    public function action_statement()
    {
        $id = Cookie::get('userId');
        if (!is_null($id)) HTTP::redirect('/');
        
        $this->template->content =
            View::factory('main/blank/statement')
                ->set('Nationality', Model::factory('Nationality')->all())
                ->set('Educations', Model::factory('Educations')->all());
    }





}
