<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Developer: Roquie
 * Current file name: Tpl.php
 *
 * All rights reserved (c)
 */

// @todo: переделать всю эту хрень

class Controller_Admin_Tpl extends Controller_Ajax_Admin
{


    /**
     * Добавление шаблона сообщения
     *
     * Получаемые данные:
     *
     * Название: $_POST['title']
     * Содержимое шаблона: $_POST['text']
     */

    public function action_add()
    {
        $title = Security::xss_clean(Arr::get($_POST, 'title'));
        $result = Model::factory('Admin_MsgTemplate')->getBy('title', $title);
        if (empty($result['title'])) {

            Model::factory('Admin_MsgTemplate')->addRec(array(
                'title' => $title,
                'message' => Security::xss_clean(Arr::get($_POST, 'text')),
                'author' => Session::instance()->get('first_name').' '.Session::instance()->get('last_name'),
                'time' => date('H:i:s'),
                'date' => date('Y-m-d'),
            ));

            echo json_encode(array(
                    'status' => 'success', //error or info
                    'msg' => 'Шаблон '.$title.' успешно добавлен',
                    'data'   => array(
                        'id'     => 13, //айди вставленноё записи
                        'title'  => $title  //это то которое тебе придёт постом
                    ),
                    'success' => 1
            ));
        } else {
            echo json_encode(array(
                    'status'  => 'error',
                    'msg'     => 'Шаблон с названием '.$title.' уже существует',
                    'success' => 0
            ));
        }

    }

    /**
     * Редактирование шаблона
     * Получаемые данные:
     *
     * id    : $_POST['id']
     * title : $_POST['title']
     * text  : $_POST['text']
     * update: $_POST['update'] если 1, значит надо обновлять запись, 0 - добавлять
     */
    public function action_edit()
    {
        $title = Security::xss_clean(Arr::get($_POST, 'title'));
        $result = Model::factory('Admin_MsgTemplate')->getBy('title', $title);

        if (empty($result['title'])) {

            Model::factory('Admin_MsgTemplate')->upd(Arr::get($_POST, 'id'), array(
                'title' => $title,
                'message' => Security::xss_clean(Arr::get($_POST, 'text')),
                'author' => Session::instance()->get('first_name').' '.Session::instance()->get('last_name'),
                'time' => date('H:i:s'),
                'date' => date('Y-m-d'),
            ));

            $res = 5;//Model::factory('Admin_MsgTemplate')->getLastRecord();

            echo json_encode(array(
                    'status' => 'success', //error or info
                    'msg' => 'Шаблон '.$title.' успешно обновлен',
                    'data'   => array(
                        'id'     => $res['id'], //айди вставленноё записи
                        'title'  => $title //это то которое тебе придёт постом
                    ),
                    'success' => 1
            ));

        } else {

            echo json_encode(array(
                    'status'  => 'error',
                    'msg'     => 'Шаблон '.$title.' уже существует',
                    'success' => 0
            ));
        }

    }

    /**
     * выборка из бд, отправка данных для отображения в форме
     * Получаемые данные:
     *
     * id: $_POST['id']
     *
     */
    public function action_select()
    {

        $id = Security::xss_clean(Arr::get($_POST, 'id'));
        $result = Model::factory('Admin_MsgTemplate')->getBy('id', $id);

        if (!empty($result['id'])) {

            $data = array(
                'title'      => $result['title'],    //Название шаблона
                'text'  => $result['message']      //Текст шаблона
            );

            echo json_encode(array(
                    'status'  => 'success', //error or info
                    'data'    => $data,
                    'success' => 1
            ));
        } else {

            echo json_encode(array(
                    'status'  => 'error', //error or info
                    'msg'     => 'Шаблон не найден/не существует',
                    'success' => 0
            ));
        }

    }


    /**
     * Удаление шаблона
     * Получаемые данные:
     *
     * id: $_POST['id']
     */

    public function action_remove()
    {

        Model::factory('Admin_MsgTemplate')->del(Security::xss_clean(Arr::get($_POST, 'id')));

        echo json_encode(array(
            'status' => 'success', //error or info
            'msg' => 'Шаблон удалён',
            'id' => Arr::get($_POST, 'id')
        ));
    }
}