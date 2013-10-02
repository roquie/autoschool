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
     * Изменение пароля
     */
    public function action_changepass()
    {
        $user = Model::factory('Lk_User')->getByEmail(Cookie::get('userEmail'));

        $pass_old = $this->request->post('password_old');
        $pass_new = $this->request->post('password_new');

        if ($pass_new === $pass_old)
            $this->ajax_msg('Пароли должны быть разные', 'error');

        if ($this->hash($pass_old) !== $user->password)
            $this->ajax_msg('Старый пароль не совпадает с введённым', 'error');


        $result = Model::factory('Lk_User')->updPwd($user->id, $this->hash($pass_new));

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
        $user = Model::factory('Lk_User')->getByEmail($this->request->post('email'));

        if (!$user->email)
            $this->ajax_msg('Пользователь с таким email не найден', 'error');

        $newpass = $this->newpass();
        Model::factory('Lk_User')->updPwd($user->id, $this->hash($newpass));

        $mail = Email::factory('Смена пароля', 'Ваш пароль был сброшен, новый пароль: '. $newpass)
            ->to($user->email)
            ->from('info@auto.mpt.ru', 'Автошкола');
        $mail->send();

        if ($mail)
            $this->ajax_msg('Пароль сброшен, см. почту');
        else
            $this->ajax_msg('Непредвиденная ошибка', 'error');
    }
    /**
     * Изменение заявления
     */
    public function action_changeStatement()
    {
        // @todo: а post то мб зараженным о_О
        $result = Model::factory('Lk_Statement')->updAll(Cookie::get('statement_id'), $this->request->post());
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
        // @todo: а post то мб зараженным о_О
        $result = Model::factory('Lk_Contract')->updAll(Cookie::get('contract_id'), $this->request->post());

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

        // Если 18 лет и не указано, что заказчиком будет родитель, то заказчик сам слушатель, иначе родитель или опекун
        if ($this->getAge($data['statement']['data_rojdeniya']) < 18 && !isset($data['contract']['parent'])) {
            $this->ajax_msg('Вы не можете являться заказчиком, вам нет 18 лет.', 'error');
            exit;
        }

        Session::instance()->set('key_statement', Model::factory('Lk_Statement')->addData($data['statement']));
        Session::instance()->set('key_contract', Model::factory('Lk_Contract')->addData($data['contract']));

        $this->ajax_msg(
            View::factory('main/blank/result', array(
                'age' => $this->getAge($data['statement']['data_rojdeniya'])
            ))->render()
        );

    }

    /**
     * капитан орёт - это вход!
     */
    public function action_login()
    {
        $result = Model::factory('Lk_User')->login(array(
            'email' => $this->request->post('email'), //sql inj
            'password' => $this->hash($this->request->post('password'))
        ));

        if (array_key_exists('remember', $this->request->post()) && ($result->email && $result->password)) {
            Cookie::$expiration = Date::MONTH;
            Cookie::set('userEmail', $result->email);
            Cookie::set('userPhoto', $result->photo);
            Cookie::set('statement_id', $result->Statement_id);
            Cookie::set('contract_id', $result->Contract_id);
            $this->ajax_msg(URL::site('lk'));
            exit;
        }

        if ($result->email && $result->password) {
            Cookie::$expiration = 0;
            Cookie::set('userEmail', $result->email);
            Cookie::set('userPhoto', $result->photo);
            Cookie::set('statement_id', $result->Statement_id);
            Cookie::set('contract_id', $result->Contract_id);
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
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('/');
        echo View::factory('pages/messages')->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Заявление"
     */
    public function action_statement()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('/');
        echo View::factory('pages/statement')->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Договор"
     */
    public function action_contract()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('/');
        echo View::factory('pages/contract')->render();
    }

    /**
     * Возвращает страницу из личного кабинета "Загрузки"
     */
    public function action_download()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('/');
        echo View::factory('pages/download')->render();
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
            $validation = Validation::factory($_POST)
                ->rule('email', 'email');

            if ( !$validation->check() ) {
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

        $info = Model::factory('Lk_User')->getByEmail($user['email']);

        if ($info->email) {
            $this->ajax_msg('Такой пользователь уже зарегистрирован', 'error');
            exit;
        }

        $newpass = $this->newpass();

        $testPOST = array();

        if ((int)(string)Session::instance()->get('key_statement') && (int)(string)Session::instance()->get('key_contract')) {
            $testPOST = array(
                'registration' => array(
                    'Statement_id' =>  (int)(string)Session::instance()->get('key_statement'),
                    'Contract_id' =>  (int)(string)Session::instance()->get('key_contract'),
                    'photo' =>  $user['photo_big'],
                    'email' =>  $user['email'],
                    'password' => $this->hash($newpass)
                )
            );
        } else {
            $this->ajax_msg('Непредвиденная ошибка БД', 'error');
        }

        $r = Model::factory('Lk_User')->addData($testPOST['registration']);

        if (!$r)
            $this->ajax_msg('Непредвиденная ошибка БД', 'error');


        $mail = Email::factory('Регистрация в Автошколе МПТ', 'Ваш логин: '.$user['email'].' Ваш пароль : '. $newpass)
            ->to($user['email'])
            ->from('info@auto.mpt.ru', 'Автошкола');
        $mail->send();

        Cookie::$expiration = 0;
        Cookie::set('userEmail', $user['email']);
        Cookie::set('userPhoto', $user['photo_big']);
        Cookie::set('statement_id', (int)(string)Session::instance()->get('key_statement'));
        Cookie::set('contract_id', (int)(string)Session::instance()->get('key_contract'));

        if ($mail) {
            Session::instance()->delete('key_statement');
            Session::instance()->delete('key_contract');
            Session::instance()->set('after_register', 'yes');
            $this->ajax_data(array(
                'redirect' => URL::site('lk')
            ));
        }
        else
            $this->ajax_msg('Непредвиденная ошибка', 'error');

    }

    /**
     * Формирование заявления
     */
    public function action_downloadStatement()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('/');

        $statement = Model::factory('Lk_Statement')->getById(Cookie::get('statement_id'));

        $document = new TemplateDocx(APPPATH.'templates/zayavlenie/template.docx');

        $document->setValue('Fam', $statement['famil']);
        $document->setValue('Name', $statement['imya']);
        $document->setValue('Otchestvo', $statement['ot4estvo']);
        $document->setValue('DateBirth', $statement['data_rojdeniya']);
        $document->setValue('Nationality', $statement['grajdanstvo']);
        $document->setValue('PlaceBirth', $statement['mesto_rojdeniya']);
        $document->setValue('AdresRegPoPasporty', $statement['adres_reg_po_pasporty']);
        $document->setValue('VremReg', $statement['vrem_reg']);
        $document->setValue('Seriya',$statement['pasport_seriya']);
        $document->setValue('Nomer', $statement['pasport_nomer']);
        $document->setValue('Vidacha', $statement['pasport_data_vyda4i']);
        $document->setValue('PasportKemVydan', $statement['pasport_kem_vydan']);
        $document->setValue('DomTel', $statement['dom_tel']);
        $document->setValue('MobTel', $statement['mob_tel']);
        $document->setValue('Obrazovanie', $statement['obrazovanie']);
        $document->setValue('MestoRaboty',$statement['mesto_raboty']);
        $document->setValue('About', $statement['about']);

        $file = 'zayavleniya/zayavlenie_'.date('d_m_Y_H_i_s').'.docx';

        $document->save(APPPATH.'output_blanks/'.$file);

        $this->response->send_file(APPPATH.'output_blanks/'.$file, null, array(
            'delete' => true
        ));
        unset($document);
    }

    /**
     * Формирование договора
     */
    public function action_downloadContract()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('/');

        $contract = Model::factory('Lk_Contract')->getById(Cookie::get('contract_id'));
        $statement = Model::factory('Lk_Statement')->getById(Cookie::get('statement_id'));

        $obj = new TemplateDocx(APPPATH.'templates/contract/dogovor.docx');

        $obj->setValue('Customer', $contract['famil'].' '.$contract['imya'].' '.$contract['ot4estvo']);
        $obj->setValue('CSeriya', $contract['pasport_seriya']);
        $obj->setValue('CNomer', $contract['pasport_nomer']);
        $obj->setValue('CVidan', $contract['pasport_kem_vydan']);
        $obj->setValue('CAddress', $contract['adres_reg_po_pasporty']);
        $obj->setValue('CPhone', $contract['phone']);

        $obj->setValue('Listener', $statement['famil'].' '.$statement['imya'].' '.$statement['ot4estvo']);
        $obj->setValue('LSeriya', $statement['pasport_seriya']);
        $obj->setValue('LNomer', $statement['pasport_nomer']);
        $obj->setValue('LVidan', $statement['pasport_kem_vydan']);
        $obj->setValue('LAddress', $statement['adres_reg_po_pasporty']);
        $obj->setValue('LPhone', $statement['mob_tel']);

        $contr = 'contracts/contract_'.date('d_m_Y_H_i_s').'.docx';

        $obj->save(APPPATH.'output_blanks/'.$contr);

        $this->response->send_file(APPPATH.'output_blanks/'.$contr, null, array(
            'delete' => true
        ));
        unset($document);
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

    /**
     * рандомайзер для нового пароля
     * @return string
     */
    protected function newpass()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars), 0, 8);
    }

    protected function getAge($age)
    {
        $mas = explode('.', $age);
        if($mas[1] > date('m') || $mas[1] == date('m') && $mas[0] > date('d'))
            return (date('Y') - $mas[2] - 1);
        else
            return (date('Y') - $mas[2]);
    }
}