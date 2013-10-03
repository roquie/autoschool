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
        //if (is_null($email)) HTTP::redirect('/');
    }

    public function action_lol()
    {
        $test = ORM::factory('Lk_Contract')->as_array();
        var_dump($test);
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
     * Страница входа
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

    /**
     * морда регистрации
     */
    public function action_registration()
    {
        $this->template->content = View::factory('reg');
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
     * Формирование заявления
     */
    public function action_downloadStatement()
    {
        $path = $this->createStatement();

        $this->response->send_file(APPPATH.'output_blanks/'.$path, null, array(
              'delete' => true
        ));
    }

    /**
     * Формирование договора
     */
    public function action_downloadContract()
    {
        $path = $this->createContract();
        $this->response->send_file(APPPATH.'output_blanks/'.$path, null, array(
           'delete' => true
        ));
    }

    /**
     * Все архивчиком
     */
    public function action_downloadZip()
    {

        $contact = $this->createContract();
        $statement = $this->createStatement();

        $str = File::createZip(
            APPPATH.'output_blanks/temp/documents_exports',
            array(
                 APPPATH.'output_blanks/'.$contact,
                 APPPATH.'output_blanks/'.$statement
            ));

        unlink(APPPATH.'output_blanks/'.$contact);
        unlink(APPPATH.'output_blanks/'.$statement);

        $this->response->send_file($str, null, array(
            'delete' => true
        ));

    }



    protected function createContract()
    {
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

        $contr = 'temp/'.
            $this->translit($contract['famil']).'_'.
            $this->translit($contract['imya']).'_'.
            $this->translit($contract['ot4estvo']).'_'.
            'contract_'.date('d_m_Y_H_i_s').'.docx';

        $obj->save(APPPATH.'output_blanks/'.$contr);

        unset($document);
        return $contr;
    }

    protected function createStatement()
    {
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

        $file = 'temp/'.
            $this->translit($statement['famil']).'_'.
            $this->translit($statement['imya']).'_'.
            $this->translit($statement['ot4estvo']).'_'.
            'zayavlenie_'.date('d_m_Y_H_i_s').'.docx';

        $document->save(APPPATH.'output_blanks/'.$file);

        unset($document);
        return $file;
    }

    protected function translit($str)
    {
        $tr = array(
            "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
            "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
            "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
            "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
            "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
            "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
            "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
            "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
            "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
            "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
            "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
            "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
            "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya"
        );
        return strtr($str,$tr);
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