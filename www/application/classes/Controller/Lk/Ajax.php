<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Developer: Roquie
 * Current file name: lk.php
 *
 * All rights reserved (c)
 */

class Controller_Lk_Ajax extends Controller_Ajax_Main
{
    /**
     * проверка
     */

    public function before()
    {
        parent::before();
        $no_check = array(
            'register',
            'addPapers',
            'login',
            'forgot',
        );
        if (!in_array($this->request->action(), $no_check)) {
            $userId = Cookie::get('userId');
            if (empty($userId)) HTTP::redirect('/');
        }
    }
    /**
     * проверка знает ли юзер свой пароль для изменения почты
     */
    public function action_check_pass()
    {
        $result = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        if ($result)
            if ($result->password === $this->hash($this->request->post('data.check_password')))
                $this->ajax_msg('true'); // так тебе отсылать? Чтобы ты заменил одну форму на другую о_О
         else
            $this->ajax_msg('Пароль не совпадает', 'error');
    }

    /**
     * изменение email
     */
    public function action_change_email()
    {

        if (!Valid::email($this->request->post('data.new_email'), true)) {
            $this->ajax_msg('Введите Email правильно', 'error');
            exit;
        }

        $user = Model::factory('Users')->getBy('email', $this->request->post('data.new_email'));

        if ($user) {
            $this->ajax_msg('Пользователь с таким email уже есть', 'error');
            exit;
        }


        $result = Model::factory('Users')
                       ->upd(Cookie::get('userId'), array('email' => $this->request->post('data.new_email')));

        Cookie::set('userEmail', $this->request->post('data.new_email'));

        if ($result)
            $this->ajax_msg('Email изменен');
        else
            $this->ajax_msg('Email не хочет менятся, админа накажи', 'error');
    }
    /**
     * Изменение пароля
     */
    public function action_changepass()
    {
        $pass_old = $this->request->post('data.password_old');
        $pass_new = $this->request->post('data.password_new');

        $user = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        if ($pass_new === $pass_old) {
            $this->ajax_msg('Пароли должны быть разные', 'error');
            exit;
        }


        if ($this->hash($pass_old) !== $user->password) {
            $this->ajax_msg('Старый пароль не совпадает с введённым', 'error');
            exit;
        }

        $result = Model::factory('Users')->upd($user->id, array('password' => $this->hash($pass_new)));

        if (!$result)
            $this->ajax_msg('Пароль не хочет менятся, админа накажи', 'error');
        else
            $this->ajax_msg('Пароль изменен');

    }
    /**
     * Сброс пароля
     */
    public function action_forgot()
    {
        $user = Model::factory('Users')->getBy('email', $this->request->post('data.email'));

        if (!$user) {
            $this->ajax_msg('Пользователь с таким email не найден', 'error');
            exit;
        }

        $newpass = Text::random();
        Model::factory('Users')->upd($user->id, array('password' => $this->hash($newpass)));

        $mail = Email::factory('Смена пароля', 'Ваш пароль был сброшен, новый пароль: '. $newpass)
            ->to($user->email)
            ->from('info@auto.mpt.ru', 'Автошкола');
        $mail->send();

        if ($mail)
            $this->ajax_msg('Новый пароль отправлен на указанную почту');
        else
            $this->ajax_msg('Непредвиденная ошибка', 'error');
    }

    /**
     * Изменение заявления
     */
    public function action_changeStatement()
    {

        $no_required = array('ot4estvo', 'dom_tel', 'vrem_reg');
        $value = Security::xss_clean($this->request->post('value'));
        
        if (!$value && !in_array($this->request->post('name'), $no_required)) {
            $this->ajax_msg('Заполните поле', 'error');
            exit;
        }
        $data = array(
            $this->request->post('name'),
            $value
        );


        $result = Model::factory('Statements')->upd(array('user_id', Cookie::get('userId')), $data);
        if (!$result)
            $this->ajax_msg('Заявление изменению не поддается', 'error');
        else
            $this->ajax_msg('Заявление изменено');
    }

    /**
     * изменеине договора
     */
    public function action_changeContract()
    {

        $value = Security::xss_clean($this->request->post('value'));

        $data = array(
            $this->request->post('name'),
            $value
        );


        $result = Model::factory('Contracts')->upd(array('user_id', Cookie::get('userId')), $data);

        if (!$result)
            $this->ajax_msg('Договор изменению не поддается :(', 'error');
        else
            $this->ajax_msg('Договор изменен');
    }

    /**
     * Добавление данных для договора и заявления
     */
    public function action_addPapers()
    {

        // поля необязательные для заполнения
        $no_required = array('ot4estvo', 'dom_tel');

        $data = array();

        foreach ($_POST as $key => $value)
            foreach ($value as $k => $v)
                $data[$key][$k] = Security::xss_clean($v);

        $error = array();
        foreach ($data as $key => $value)
            foreach ($value as $k => $v)
            {
                if (empty($v) && $key != 'contract') {
                    if (!isset($data['statement']['toggleReg']) && $k === 'vrem_reg' || in_array($k, $no_required))
                        continue;
                    $error[$key][] = $k;
                }
            }

        if (!empty($error))
        {
            $this->ajax_data($error, null, 'empty');
            exit;
        }


        if (isset($data['statement'])) {

            // Если 18 лет и не указано, что заказчиком будет родитель, то заказчик сам слушатель, иначе родитель или опекун
            if ($this->getAge($data['statement']['data_rojdeniya']) < 18 && !isset($data['contract']['parent'])) {
                $this->ajax_msg('Вы не можете являться заказчиком, вам нет 18 лет.', 'error');
                exit;
            }

            Session::instance()->set('statement', $data['statement']);
            Session::instance()->set('contract', $data['contract']);


            $this->ajax_msg(
                View::factory('main/blank/result', array(
                    'age' => $this->getAge($data['statement']['data_rojdeniya'])
               ))->render()
            );
        }


    }

    /**
     * капитан орёт - это вход!
     */
    public function action_login()
    {
        $result = Model::factory('Users')->login(array(
            'email' => $this->request->post('data.email'),
            'password' => $this->hash($this->request->post('data.password'))
        ));

        if (array_key_exists('remember', $this->request->post()) && ($result->email && $result->password)) {
            Cookie::$expiration = Date::MONTH;
            Cookie::set('userId', $result->id);
            Cookie::set('userEmail', $result->email);
            Cookie::set('userPhoto', $result->photo);
            Cookie::set('group_id', $result->group_id);
            $this->ajax_msg(URL::site('lk'));
            exit;
        }

        if ($result->email && $result->password) {
            Cookie::$expiration = 0;
            Cookie::set('userId', $result->id);
            Cookie::set('userEmail', $result->email);
            Cookie::set('userPhoto', $result->photo);
            Cookie::set('group_id', $result->group_id);
            $this->ajax_msg(URL::site('lk'));
        } else {
            $this->ajax_msg('Пользователь не существует', 'error');
        }

    }

    /**
     * Возвращает страницу из личного кабинета "Сообщения"
     */
    public function action_messages()
    {

        $result = Model::factory('News')->allWhere('group_id',  Cookie::get('group_id'));



        if (!$result) {
            $data[] = array(
                'title' => 'Группа не определена администратором',
                'message' => 'Сообщений нет',
            );
        } else {
            $data = array();
            foreach ($result as $v)
                $data[] = $v->as_array();

        }

        echo View::factory('lk/pages/messages')
            ->set('messages', $data)
            ->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Заявление"
     */
    public function action_statement()
    {

        $result = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        echo View::factory('lk/pages/statement', array(
            'info' => Model::factory('Statements')->getBy('user_id', Cookie::get('userId')),
            'is_approved' => $result->is_approved,
        ))->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Заявление"
     */
    public function action_newmsg()
    {

        //$result = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        echo View::factory('lk/pages/newmsg', array(
            //'info' => Model::factory('Statements')->getBy('user_id', Cookie::get('userId')),
            //'is_approved' => $result->is_approved,
        ))->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Договор"
     */
    public function action_contract()
    {
        $result = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        echo View::factory('lk/pages/contract', array(
            'info' => Model::factory('Contracts')->getBy('user_id', Cookie::get('userId')),
            'is_approved' => $result->is_approved,
        ))->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Загрузки"
     */
    public function action_download()
    {

        echo View::factory('lk/pages/downloads')->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Помощь"
     */
    public function action_help()
    {
        echo View::factory('lk/pages/help', array(
            'userPhoto' => Cookie::get('userPhoto')
        ))->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Настройки"
     */
    public function action_settings()
    {
        echo View::factory('lk/pages/settings')->render();
    }


    /**
     * Возвращает массив гражданств для select2
     */
    public function action_getNat()
    {
        $data = array();
        $temp_data = array();
        $nationality = Model::factory('Nationality')->all();
        foreach ($nationality as $key => $value) {
            $temp_data['id'] = $value->id;
            $temp_data['text'] = $value->grajdanstvo;
            array_push($data, $temp_data);
        }
        $ret = array();
        $ret['results'] = $data;
        echo json_encode($ret);
    }

    /**
     * Возвращает массив образования для select2
     */
    public function action_getEdu()
    {
        $data = array();
        $temp_data = array();
        $education = Model::factory('Educations')->all();
        foreach ($education as $key => $value) {
            $temp_data['id'] = $value->id;
            $temp_data['text'] = $value->obrazovanie;
            array_push($data, $temp_data);
        }
        $ret = array();
        $ret['results'] = $data;
        echo json_encode($ret);
    }

    /**
         * регистрация новых слушателей
     */
    public function action_register()
    {
        $is_email = Arr::get($_POST, 'your_email');
        if (!isset($is_email))
            $user = json_decode($this->request->post('data'), true);
        else {
            $user['email'] = Arr::get($_POST, 'email');

            if (!Valid::email($user['email'], true)) {
                $this->ajax_msg('Неверный email адрес', 'error');
                exit;
            }
        }

        if (empty($user['photo_big']) || $user['photo_big'] === 'https://ulogin.ru/img/photo_big.png')
            $user['photo_big'] = 'img/photo.jpg';

        if (!array_key_exists('photo_big', $user) && !array_key_exists('email', $user)) {
            $this->ajax_msg('Непредвиденная ошибка', 'error'); // нет фотки или мыла в ответе
            exit;
        }

        $info = Model::factory('Users')->getBy('email', $user['email']);

        if ($info) {
            $this->ajax_msg('Такой пользователь уже зарегистрирован', 'error');
            exit;
        }

        $newpass = Text::random();


        if (Session::instance()->get('statement') && Session::instance()->get('contract')) {
            $data = array(
                    'photo' =>  $user['photo_big'],
                    'email' =>  $user['email'],
                    'password' => $this->hash($newpass)
            );

            $id = (int)Model::factory('Users')->addRec($data);

            $contract = Session::instance()->get('contract');
            $contract['user_id'] = $id;
            $statement = Session::instance()->get('statement');
            $statement['user_id'] = $id;

            $c_res = Model::factory('Contracts')->addRec($contract);
            $s_res = Model::factory('Statements')->addRec($statement);

            if (!$s_res && !$c_res) {
                $this->ajax_msg('Непредвиденная ошибка БД', 'error');
                exit;
            }

        } else {
            $this->ajax_msg('Непредвиденная ошибка', 'error');
            exit;
        }



        $mail = Email::factory('Регистрация в Автошколе МПТ', 'Ваш логин: '.$user['email'].' Ваш пароль : '. $newpass)
            ->to($user['email'])
            ->from('info@auto.mpt.ru', 'Автошкола');
        $mail->send();

        Cookie::$expiration = 0;
        Cookie::set('userId', $id);
        Cookie::set('userEmail', $user['email']);
        Cookie::set('userPhoto', $user['photo_big']);
        Cookie::set('group_id', 0);

        if ($mail) {
            Session::instance()->delete('statement');
            Session::instance()->delete('contract');
            Session::instance()->set('after_register', 'yes');
            $this->ajax_data(array(
                'redirect' => URL::site('lk')
            ));
        }
        else
            $this->ajax_msg('Непредвиденная ошибка', 'error');

    }



    /**
     * хэшируем, хэшируем ИБ гарантируем
     * @param $pass
     *
     * @return string
     */
    protected function hash($pass)
    {
        return hash_hmac('gost', $pass, 'bugaga-vlomaite-menya-polnostiu=▲♠');
    }


    protected function getAge($age)
    {
        $mas = explode('.', $age);
        if($mas[1] > date('m') || $mas[1] == date('m') && $mas[0] > date('d'))
            return (date('Y') - $mas[2] - 1);
        else
            return (date('Y') - $mas[2]);
    }

    /**
     * Первую буковку над писать с большой буквы ...
     * @param $name
     *
     * @return string
     */
    protected function upName($name)
    {
        return UTF8::ucfirst(UTF8::strtolower($name));
    }

}
