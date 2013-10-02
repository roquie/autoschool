<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Developer: Roquie
 * Current file name: lk.php
 *
 * All rights reserved (c)
 */

class Controller_Lk_Lk extends Controller_Main
{

    public function before()
    {
        parent::before();

        // всх кто без печенек, в клуб долбаебов не пускаем
        $email = Cookie::get('userEmail');
        // редирект на главную, т.к. теперь вход это попап и возвращать моно токо на главную впринципе))
        if (is_null($email)) HTTP::redirect('/');
    }

    /**
     * ЛК, главная страница
     */
    public function action_index()
    {
        $this->template->content = View::factory('lk', array(
            'statement' =>   Model::factory('Lk_Statement')->getById(Cookie::get('statement_id')),
            'contract'  =>   Model::factory('Lk_Contract')->getById(Cookie::get('contract_id')),
            'userEmail' =>   Cookie::get('userEmail'),
            'userPhoto' =>   Cookie::get('userPhoto'),
        ));
    }

    /**
     * Изменение пароля
     */
    public function action_changepass()
    {
       $this->template->content = View::factory('changepass');
    }

    /**
     * Сброс пароля
     */
    public function action_forgot()
    {
        $this->template->content = View::factory('forgot');
    }

    /**
     * Изменение заявления
     */
    public function action_changeStatement()
    {
        $this->template->content = View::factory('changeStatement', array(
            'info' => Model::factory('Lk_Statement')->getById(Cookie::get('statement_id'))
        ));
    }

    /**
     * изменеине договора
     */
    public function action_changeContract()
    {
        $this->template->content = View::factory('changeContract', array(
             'info' => Model::factory('Lk_Contract')->getById(Cookie::get('contract_id')),
        ));

    }

    /**
     * доедание печенек с крошками
     */
    public function action_logout()
    {
        Cookie::delete('userEmail');
        Cookie::delete('userPhoto');
        Cookie::delete('statement_id');
        Cookie::delete('contract_id');
        HTTP::redirect('/');
    }

}