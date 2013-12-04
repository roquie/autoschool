<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Developer: Roquie
 * Current file name: lk.php
 *
 * All rights reserved (c)
 */

class Controller_Lk_Lk extends Controller_Main
{
    /**
     * проверка
     */
    public function before()
    {
        parent::before();

        // всх кто без печенек, в лк не пускаем
        $userId = Cookie::get('userId');
        if (empty($userId)) HTTP::redirect('/');
    }

    /**
     * ЛК, главная страница
     */
    public function action_index()
    {

        $this->template->content = View::factory('lk/lk', array(
            'statement' =>   Model::factory('Statements')->getBy('user_id', (int)Cookie::get('userId')) ?: HTTP::redirect('lk/logout'),
            'contract'  =>   Model::factory('Contracts')->getBy('user_id', (int)Cookie::get('userId')) ?: HTTP::redirect('lk/logout'),
            'group'     =>   Model::factory('Groups')->getBy('id', (int)Cookie::get('group_id')) ?: 0,
            'userEmail' =>   Cookie::get('userEmail'),
            'userPhoto' =>   Cookie::get('userPhoto'),
        ));
    }


    /**
     * Изменение пароля
     */
    public function action_changepass()
    {
       $this->template->content = View::factory('lk/changepass');
    }

    /**
     * Сброс пароля
     */
    public function action_forgot()
    {
        $this->template->content = View::factory('lk/forgot');
    }


    /**
     * Формирование заявления
     */
    public function action_downloadStatement()
    {
       Request::factory('func/documents/download/statement-'.Cookie::get('userId'))->execute();
    }

    /**
     * Формирование договора
     */
    public function action_downloadContract()
    {
        Request::factory('func/documents/download/contract-'.Cookie::get('userId'))->execute();
    }
    /**
     * Формирование квитанции
     */
    public function action_downloadTicket()
    {
        Request::factory('func/documents/download/ticket-'.Cookie::get('userId'))->execute();
    }

    public function action_downloadZip()
    {
        Request::factory('func/documents/download/zip-'.Cookie::get('userId'))->execute();
    }


    /**
     * доедание печенек с крошками
     */
    public function action_logout()
    {
        Cookie::delete('userId');
        Cookie::delete('userEmail');
        Cookie::delete('userPhoto');
        Cookie::delete('group_id');
        HTTP::redirect('/');
    }

}
