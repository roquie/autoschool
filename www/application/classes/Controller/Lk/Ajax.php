<?php defined('SYSPATH') OR die('No direct access allowed.');

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
        $no_token = array(
            'changeStatement',
            'changeContract'
        );
        if (!in_array($this->request->action(), $no_check)) {
            $userId = Cookie::get('userId');
            if (empty($userId)) HTTP::redirect('/');
        }
        $csrf = $this->request->post('data.csrf');

        if (!Security::is_token($csrf) && !in_array($this->request->action(), $no_token))
        {
            //$this->ajax_msg($csrf);
            throw new HTTP_Exception_404();
        }
    }

    public function action_create_tmp_file()
    {
        $type = $this->request->param('id');
        Request::factory('func/documents/get/'.$type.'-'.Cookie::get('userId'))->execute();
    }

    /**
     * проверка знает ли юзер свой пароль для изменения почты
     */
    public function action_check_pass()
    {
        $result = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        if ($result)
            if ($result->password === $this->hash($this->request->post('data.check_password')))
                $this->ajax_msg('true');
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
/*        $csrf = $this->request->post('data.csrf');
        $this->ajax_msg($csrf, 'error');
        exit;*/
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
        $message = View::factory('tmpmail/template', array(
            'content' => View::factory('tmpmail/lk/forgot', array(
                    'name' => $user->Statements->imya,
                    'pass' => $newpass
                ))
        ));

        $mail = Email::factory('Смена пароля', $message, 'text/html')
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
        $id = $this->request->param('id') ?: Cookie::get('userId');
        $data = array(
            $this->request->post('name') => $this->request->post('value')
        );

        try {
            $s = ORM::factory('Statements', array('user_id' => $id));
            //$s->set($this->request->post('name'), $this->request->post('value'));
            $s->values($data);
            $s->update();
            $this->ajax_msg($this->request->post('name'));
        } catch(ORM_Validation_Exception $e) {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }
    }


    /**
     * Изменение договора
     */
    public function action_changeContract()
    {

        $id = $this->request->param('id') ?: Cookie::get('userId');

        try {
            $s = ORM::factory('Contracts', array('user_id' => $id));
            $s->set($this->request->post('name'), $this->request->post('value'));
            $s->save();

            $this->ajax_msg('Договор изменен');
        } catch(ORM_Validation_Exception $e) {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }
    }

    /**
     * Добавление данных для договора и заявления
     */
    public function action_addPapers()
    {

        $s = Session::instance();
        $post = $this->request->post();

        if (Security::is_token($post['csrf']))
        {
            try
            {
                ORM::factory('Statements')
                    ->values($post['statement'])
                    ->check();
            }
            catch(ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
                $this->ajax_msg('Заявление: '.array_shift($errors), 'error');
            }

            try
            {
                ORM::factory('Contracts')
                    ->values($post['contract'])
                    ->check();
            }
            catch(ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
                $this->ajax_msg('Договор: '.array_shift($errors), 'error');
            }


            // Если 18 лет и не указано, что заказчиком будет родитель, то заказчик сам слушатель, иначе родитель или опекун
            if ($this->getAge($post['statement']['data_rojdeniya']) < 18 && !isset($data['contract']['parent']))
            {
                $this->ajax_msg('Вы не можете являться заказчиком, вам нет 18 лет', 'error');
                exit;
            }

            $s->set('statement', $post['statement'])
              ->set('contract', $post['contract']);

            $this->ajax_data(
                View::factory('main/blank/result', array(
                    'age' => $this->getAge($post['statement']['data_rojdeniya'])
                ))->render()
            );
        }
        else
        {
          throw new HTTP_Exception_404();
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
            $this->ajax_msg('Пользователь не найден', 'error');
        }

    }

    /**
     * Возвращает страницу из личного кабинета "Группа"
     */
    public function action_messages()
    {
        $result = ORM::factory('News')
            ->where('group_id', '=', Cookie::get('group_id'))
            ->find_all();

        $data = array();

        if ($result->count() === 0)
            $data[] = array(
                'title' => 'Группа не определена администратором',
                'message' => 'Сообщения не найдены.',
            );
         else
            foreach ($result as $v)
                $data[] = $v->as_array();

        $this->ajax_data(
            View::factory('lk/pages/messages')
                ->set('messages', $data)->render()
        );
    }

    /**
     * Возвращает страницу из личного кабинета "Заявление"
     */
    public function action_statement()
    {
        $result = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        $this->ajax_data(
            View::factory('lk/pages/statement', array(
                'info' => Model::factory('Statements')->getBy('user_id', Cookie::get('userId')),
                'status' => $result->status,
            ))->render()
        );
    }

    /**
     * Возвращает страницу из личного кабинета "Помощь"
     */
    public function action_help()
    {
        $this->ajax_data(
            View::factory('lk/pages/help', array(
                'messages' => Model::factory('Messages')->getMessage(Cookie::get('userId')),
                'userPhoto' => Cookie::get('userPhoto'),
                'admin_avatar' => Kohana::$config->load('settings.admin_avatar'),
            ))->render()
        );
    }

    /**
     * Добавление нового сообщения
     */
    public function action_addMessage()
    {
        $message = $this->request->post('data.message');

        try
        {
            ORM::factory('Messages')->values(
                array(
                    'user_id' => Cookie::get('userId'),
                    'message' => $message,
                )
            )->create();
        }
        catch (ORM_Validation_Exception  $e)
        {
            $errors = $e->errors('validation');
            $this->ajax_msg(array_shift($errors), 'error');
        }


        $this->ajax_data(
            View::factory('lk/pages/html/newmsg', array(
                'message' => Security::xss_clean($message),
                'userPhoto' => Cookie::get('userPhoto'),
            ))->render()
        );
    }

    /**
     * Заргузка сообщений пользователя
     */
    public function action_load_message()
    {
        try
        {
            $m = new Model_Messages();
            $result = $m->getMessage(Cookie::get('userId'), $this->request->post('data.offset'));
        }
        catch(Database_Exception $e)
        {
            $this->ajax_msg($e->getMessage(), 'error');
        }
        if (empty($result)) {
            $this->ajax_msg('', 'empty');
            exit;
        }
        $this->ajax_data(
            View::factory('lk/pages/html/loadmsg', array(
                'messages' => $result,
                'userPhoto' => Cookie::get('userPhoto'),
                'admin_avatar' => Kohana::$config->load('settings.admin_avatar'),
            ))->render()
        );
    }

    /**
     * Возвращает страницу из личного кабинета "Договор"
     */
    public function action_contract()
    {
        $result = Model::factory('Users')->getBy('id', Cookie::get('userId'));

        $this->ajax_data(
            View::factory('lk/pages/contract', array(
                'info' => Model::factory('Contracts')->getBy('user_id', Cookie::get('userId')),
                'status' => $result->status,
            ))->render()
        );
    }

    /**
     * Возвращает страницу из личного кабинета "Загрузки"
     */
    public function action_download()
    {
        $this->ajax_data(
            View::factory('lk/pages/downloads')->render()
        );
    }

    /**
     * Возвращает страницу из личного кабинета "Настройки"
     */
    public function action_settings()
    {
        $this->ajax_data(
            View::factory('lk/pages/settings')->render()
        );
    }


    /**
     * Возвращает массив гражданств для select2
     */
    public function action_getNat()
    {
        $data = array();
        $temp_data = array();
        $nationality = ORM::factory('Nationality')->find_all();
        foreach ($nationality as $key => $value) {
            $temp_data['id'] = $value->id;
            $temp_data['text'] = $value->grajdanstvo;
            array_push($data, $temp_data);
        }

        $this->ajax_data($data);
    }

    /**
     * Возвращает массив образования для select2
     */
    public function action_getEdu()
    {
        $data = array();
        $temp_data = array();
        $education = ORM::factory('Educations')->find_all();
        foreach ($education as $key => $value) {
            $temp_data['id'] = $value->id;
            $temp_data['text'] = $value->obrazovanie;
            array_push($data, $temp_data);
        }
        $this->ajax_data($data);
    }

    /**
         * регистрация новых слушателей
     */
    public function action_register()
    {
        $s = Session::instance();
        $post = $this->request->post();

        if (Security::is_token($post['csrf']))
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

            $newpass = Text::random();


            if ($s->get('statement') && $s->get('contract'))
            {
                $data = array(
                    'photo' =>  $user['photo_big'],
                    'email' =>  $user['email'],
                    'password' => $this->hash($newpass)
                );

                try
                {
                    $id = ORM::factory('Users')
                        ->values($data)
                        ->create()
                        ->pk();


                    $contract = $s->get('contract');
                    $contract['user_id'] = $id;

                    $statement = $s->get('statement');
                    $statement['user_id'] = $id;

                    ORM::factory('Contracts')
                        ->values($contract)
                        ->create();

                    ORM::factory('Statements')
                        ->values($statement)
                        ->create();

                }
                catch(ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('validation');
                    $this->ajax_msg(array_shift($errors), 'error');
                }

            }
            else
            {
                throw new HTTP_Exception_404();
            }

            $message = View::factory('tmpmail/template', array(
                'content' => View::factory('tmpmail/lk/registr', array(
                    'user' => Session::instance()->get('statement'),
                    'login' => $user['email'],
                    'pass' => $newpass
                ))
            ));

            try
            {
                Email::factory('Регистрация в Автошколе МПТ', $message, 'text/html')
                    ->to($user['email'])
                    ->from('info@auto.mpt.ru', 'Автошкола')
                    ->send();
            }
            catch(Swift_SwiftException $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }

            Cookie::$expiration = 0;
            Cookie::set('userId', $id);
            Cookie::set('userEmail', $user['email']);
            Cookie::set('userPhoto', $user['photo_big']);
            Cookie::set('group_id', 0);

            $s->delete('statement')
                ->delete('contract')
                ->set('after_register', 'yes');

            $this->ajax_data(array(
                'redirect' => URL::site('/lk')
            ));
        }
        else
        {
            throw new HTTP_Exception_404();
        }
    }



    /**
     * хэшируем, хэшируем ИБ гарантируем
     * @param $pass
     *
     * @return string
     * @DEPRICATED
     */
    protected function hash($pass)
    {
        return Text::hash($pass);
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
