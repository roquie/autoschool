<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template
{
    public $template = 'admin/layout';


    public function before()
    {
        parent::before();
        $email = Session::instance()->get('email'); if(empty($email)) throw new HTTP_Exception_404();

        $this->template->title = 'Администратор "МПТ Автошкола"';

        $this->template->navbar = View::factory('admin/navbar', array(
            'session' => Session::instance(),
        ));

        $this->template->content = '';

        //$this->template->footer = View::factory('main/footer');
    }


    public function action_index()
    {
        $this->template->content = 'GitHub 4ever <3 !';
    }

    public function action_mail()
    {
        $this->template->content = View::factory('admin/mail/send', array(
            'titles' => Model::factory('Admin_MsgTemplate')->getAll(),
        ));
    }


    public function action_papers()
    {
        $req = $this->request->query('vedomost');
        if ($req)
            $this->template->content = View::factory('admin/papers/vedomost', array(
                'name' => URL::site('uploads_old/downloaded/'.$req)
            ));
        else
            $this->template->content = View::factory('admin/papers/view', array(
                'downloadedFiles' => $this->scanDownloadedFolder(),
            ));

    }

    public function action_settings()
    {
        $this->template->content = View::factory('admin/settings', array(
            'all_users' => Model::factory('Admin_User')->getUsersWithRights(),
            'googleAccount' => Model::factory('Admin_GoogleAccount')->getLastRecord(),
            'googleAccountAllRecords' => Model::factory('Admin_GoogleAccount')->getAll(),
        ));
    }

    public function action_tpl()
    {
        $this->template->content = View::factory('admin/mail/tpl', array(
            'titles' => Model::factory('Admin_MsgTemplate')->getAll(),
        ));
    }

    /**
     * сканирование папки downloaded с файлами
     * @return array с именами файлов
     */
    protected function scanDownloadedFolder()
    {
        return array_diff(scandir(APPPATH.'/uploads_old/downloaded/'), array('..', '.'));
    }


    /**
     * сканирование папки created с файлами
     * @return array с именами файлов
     */
    protected function scanCreatedFolder()
    {
        return array_diff(scandir(APPPATH.'uploads_old/created/'), array('..', '.'));
    }

}
