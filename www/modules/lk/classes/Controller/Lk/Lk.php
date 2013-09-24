<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Developer: Roquie
 * Current file name: lk.php
 *
 * All rights reserved (c)
 */

class Controller_Lk_Lk extends Controller_Main
{

    public function action_index()
    {
        $email = Cookie::get('userEmail');

        if (is_null($email)) {
            $this->template->content = View::factory('login');
        }
        else {

            $this->template->content = View::factory('lk', array(
                'statement' =>   Model::factory('Lk_Statement')->getById(Cookie::get('statement_id')),
                'contract'  =>   Model::factory('Lk_Contract')->getById(Cookie::get('contract_id')),
                'userEmail' =>   Cookie::get('userEmail'),
                'userPhoto' =>   Cookie::get('userPhoto'),
            ));
        }


    }

    public function action_login()
    {
        $result = Model::factory('Lk_User')->login(array(
              'email' => $this->request->post('email'),
              'password' => $this->hash($this->request->post('password'))
        ));

        if (array_key_exists('remember', $this->request->post()) && ($result->email && $result->password)) {
            Cookie::$expiration = Date::MONTH;
            Cookie::set('userEmail', $result->email);
            Cookie::set('userPhoto', $result->photo);
            Cookie::set('statement_id', $result->Statement_id);
            Cookie::set('contract_id', $result->Contract_id);
            HTTP::redirect('lk');
        }

        if ($result->email && $result->password) {
            Cookie::$expiration = 0;
            Cookie::set('userEmail', $result->email);
            Cookie::set('userPhoto', $result->photo);
            Cookie::set('statement_id', $result->Statement_id);
            Cookie::set('contract_id', $result->Contract_id);
            HTTP::redirect('lk');
        } else {
            echo 'введите данные';
            exit;
        }

    }

    public function action_lol()
    {
        $testPOST = array(
            'statement' => array(
                'famil' => 'Петров',
                'imya'  => 'Сидр',
                'ot4estvo'      => 'Сидорович',
                'data_rojdeniya'      => '01.01.1974',
                'grajdanstvo'      => 'РФ',
                'mesto_rojdeniya'      => 'г. Москва, РФ',
                'adres_reg_po_pasporty'      => 'г. Москва, ул. Петросяна, д.13, к.9',
                'vrem_reg'      => 'г. Казань, ул. Матрёшкина, д.77',
                'pasport_seriya'      => '2937',
                'pasport_nomer'      => '3453890',
                'pasport_data_vyda4i'      => '20.01.1989',
                'pasport_kem_vydan'      => 'ОВД Г.КАЗАНИ',
                'mob_tel'      => '+79091234567',
                'dom_tel'      => '',
                'obrazovanie'      => 'Высшее...',
                'mesto_raboty'      => 'Гендиректор ООО АэроТрансКарго',
                'about'      => 'Интернет',
            ),
            'contract' => array(
                'famil'      => 'Петрова',
                'imya'      => 'Анастасия',
                'ot4estvo'      => 'Агафьевна',
                'adres_reg_po_pasporty'      => 'г. Москва, ул. Петросяна, д.13, к.9',
                'pasport_seriya'      => '4382',
                'pasport_nomer'      => '20934820',
                'pasport_kem_vydan'      => 'ОВД Г.КАЗАНИ 2',
                'phone'      => '+79261195550',

            ),

        );

        $s = file_get_contents('http://ulogin.ru/token.php?token='.$this->request->post('token').'&host='.$_SERVER['HTTP_HOST']);
        $user = json_decode($s, true);
        if (empty($user['photo']))
            $user['photo'] = 'img/photo.jpg';

        if (!array_key_exists('photo', $user) && !array_key_exists('email', $user))
            echo 'говносервис без фотки, мыло обычно запрашивается дополнительно';

        $info = Model::factory('Lk_User')->getByEmail($user['email']);

        if ($info->email) {
            echo "такой юзер есть";
            exit;
        }

        $result['statement_id'] = Model::factory('Lk_Statement')->addData($testPOST['statement']);
        $result['contract_id'] = Model::factory('Lk_Contract')->addData($testPOST['contract']);

        $newpass = $this->newpass();

        if ($result['statement_id'] && $result['contract_id']) {
            $testPOST = array(
                'registration' => array(
                    'Statement_id' =>  $result['statement_id'],
                    'Contract_id' =>  $result['contract_id'],
                    'photo' =>  $user['photo'],
                    'email' =>  $user['email'],
                    'password' => $this->hash($newpass)
                )
            );

        } else {
            //$this->ajax_msg('Непредвиденная ошибка', 'error');
        }

        $r = Model::factory('Lk_User')->addData($testPOST['registration']);

        //if (!$r)
        //$this->ajax_msg('Непредвиденная ошибка', 'error');


        $mail = Email::factory('Регистрация в Автошколе МПТ', 'Ваш логин: '.$user['email'].' Ваш пароль : '. $newpass)
            ->to($user['email'])
            ->from('info@auto.mpt.ru', 'Автошкола');
        $mail->send();

        if ($mail)
            echo "ok bro";
        else
            echo "result very badly for you";


    }

    public function action_registration()
    {
        $email = Cookie::get('userEmail'); if (!is_null($email)) HTTP::redirect('lk');


        $this->template->content = View::factory('reg', array(
        ));

    }

    public function action_changepass()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('lk/login');

        if (HTTP_Request::POST === $this->request->method()) {
            $user = Model::factory('Lk_User')->getByEmail($email);

            $pass_old = $this->request->post('password_old');
            $pass_new = $this->request->post('password_new');

            if ($pass_new === $pass_old) {
                echo "парольчики совпадают";
                exit;
            }
            if ($this->hash($pass_old) !== $user->password) {
                echo "старый пароль не совпадает с введённым";
                exit;
            }

            Model::factory('Lk_User')->updPwd($user->id, $this->hash($pass_new));

            echo "pwd update - ok";
            exit;

        } else {
            $this->template->content = View::factory('changepass');

        }
    }

    public function action_forgot()
    {
        if (HTTP_Request::POST === $this->request->method()) {

            $user = Model::factory('Lk_User')->getByEmail($this->request->post('email'));

            if (!$user->email) {
                echo 'мыла нет в базе';
                exit;
            }

            $newpass = $this->newpass();
            Model::factory('Lk_User')->updPwd($user->id, $this->hash($newpass));

            $mail = Email::factory('Смена пароля', 'Ваш пароль был сброшен, новый пароль: '. $newpass)
                ->to($user->email)
                ->from('info@auto.mpt.ru', 'Автошкола');
            $mail->send();

            if ($mail)
                echo "ok bro";
            else
                echo "result very badly for you";
        } else {
            $this->template->content = View::factory('forgot');
        }


        /*if ($result)
            $this->ajax_msg('Сообщение отправлено');
        else
            $this->ajax_msg('Ошибка отправки', 'error');*/
    }

    public function action_changeStatement()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('lk/login');

        $statement = Model::factory('Lk_Statement')->getById(Cookie::get('statement_id'));

        $this->template->content = View::factory('changeStatement', array(
            'info' => $statement
        ));

        if (HTTP_Request::POST === $this->request->method()) {
            Model::factory('Lk_Statement')->updAll(Cookie::get('statement_id'), $this->request->post());
            echo "OK";
            exit;
        }

    }

    public function action_changeContract()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('lk/login');

        $contract = Model::factory('Lk_Contract')->getById(Cookie::get('contract_id'));

        $this->template->content = View::factory('changeContract', array(
             'info' => $contract
        ));

        if (HTTP_Request::POST === $this->request->method()) {
            Model::factory('Lk_Contract')->updAll(Cookie::get('contract_id'), $this->request->post());

            echo "OK";
            exit;
        }


    }

    /**
     * Формирование заявления
     */
    public function action_downloadStatement()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('lk/login');
        
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

        $this->response->send_file(APPPATH.'output_blanks/'.$file);
        
        unset($document);
    }

    /**
     * Формирование договора
     */
    public function action_downloadContract()
    {
        $email = Cookie::get('userEmail');
        if (is_null($email)) HTTP::redirect('lk/login');
        
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

        $this->response->send_file(APPPATH.'output_blanks/'.$contr);

        unset($document);
    }

    public function action_logout()
    {

        Cookie::delete('userEmail');
        Cookie::delete('userPhoto');
        Cookie::delete('statement_id');
        Cookie::delete('contract_id');
        HTTP::redirect('/lk');
    }

    protected function hash($pass)
    {
        return hash_hmac('gost', $pass, 'bugaga-vlomaite-menya-polnostiu=▲♠');
    }

    protected function newpass()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars), 0, 8);
    }
}