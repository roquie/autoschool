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
     * Формирование квитанции
     */
    public function action_downloadTicket()
    {
        $path = $this->createTicket();
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
        $ticket = $this->createTicket();

        $paths = array(
            APPPATH.'output_blanks/'.$contact,
            APPPATH.'output_blanks/'.$statement,
            APPPATH.'output_blanks/'.$ticket,
        );

        $str = File::createZip(APPPATH.'output_blanks/temp/documents_exports', $paths);

        foreach ($paths as $value)
            unlink($value);

        $this->response->send_file($str, null, array(
            'delete' => true
        ));

    }

    protected function createTicket()
    {
        $contract = Model::factory('Contracts')->getBy('user_id', Cookie::get('userId'));

        $obj = new TemplateDocx(APPPATH.'templates/ticket/ticket.docx');

        $famil = UTF8::ucfirst(UTF8::strtolower($contract->famil));
        $imya = UTF8::ucfirst(UTF8::strtolower(UTF8::substr($contract->imya, 0, 1).'. '));
        $ot4estvo = UTF8::ucfirst(UTF8::strtolower(UTF8::substr($contract->ot4estvo, 0, 1).'.'));

        $obj->setValue('Customer', $famil.' '.$imya.' '.$ot4estvo);

        $file = 'temp/'.
            $this->translit($contract->famil).'_'.
            $this->translit(UTF8::substr($contract->imya, 0, 1)).'_'.
            $this->translit(UTF8::substr($contract->ot4estvo, 0, 1)).'_'.
            'kvitanciya_'.date('d_m_Y_H_i_s').'.docx'; // поменял, потому что все транслитом должно быть, а не в перемешку

        $obj->save(APPPATH.'output_blanks/'.$file);

        unset($document);
        return $file;
    }

    protected function createContract()
    {
        $contract = Model::factory('Contracts')->getBy('user_id', Cookie::get('userId'));
        $statement = Model::factory('Statements')->getBy('user_id', Cookie::get('userId'));

        $obj = new TemplateDocx(APPPATH.'templates/contract/dogovor.docx');

        $obj->setValue('Customer', $contract->famil.' '.$contract->imya.' '.$contract->ot4estvo);
        $obj->setValue('CSeriya', $contract->pasport_seriya);
        $obj->setValue('CNomer', $contract->pasport_nomer);
        $obj->setValue('CVidan', $contract->pasport_kem_vydan);
        $obj->setValue('CAddress', $contract->adres_reg_po_pasporty);
        $obj->setValue('CPhone', $contract->phone);

        $obj->setValue('Listener', $statement->famil.' '.$statement->imya.' '.$statement->ot4estvo);
        $obj->setValue('LSeriya', $statement->pasport_seriya);
        $obj->setValue('LNomer', $statement->pasport_nomer);
        $obj->setValue('LVidan', $statement->pasport_kem_vydan);
        $obj->setValue('LAddress', $statement->adres_reg_po_pasporty);
        $obj->setValue('LPhone', $statement->mob_tel);

        $contr = 'temp/'.
            $this->translit($contract->famil).'_'.
            $this->translit(UTF8::substr($contract->imya,0, 1)).'_'.
            $this->translit(UTF8::substr($contract->ot4estvo,0, 1)).'_'.
            'dogovor_'.date('d_m_Y_H_i_s').'.docx';

        $obj->save(APPPATH.'output_blanks/'.$contr);

        unset($document);
        return $contr;
    }

    protected function createStatement()
    {
        $statement = Model::factory('Statements')->getBy('user_id', Cookie::get('userId'));

        $document = new TemplateDocx(APPPATH.'templates/zayavlenie/template.docx');

        $nationality = Model::factory('Nationality')->getBy('id', $statement->nationality_id);
        $education = Model::factory('Educations')->getBy('id', $statement->education_id);

        $document->setValue('Fam', $statement->famil);
        $document->setValue('Name', $statement->imya);
        $document->setValue('Otchestvo', $statement->ot4estvo);
        $document->setValue('DateBirth', $statement->data_rojdeniya);
        $document->setValue('Nationality', $nationality->grajdanstvo);
        $document->setValue('PlaceBirth', $statement->mesto_rojdeniya);
        $document->setValue('AdresRegPoPasporty', $statement->adres_reg_po_pasporty);
        $document->setValue('VremReg', $statement->vrem_reg);
        $document->setValue('Seriya',$statement->pasport_seriya);
        $document->setValue('Nomer', $statement->pasport_nomer);
        $document->setValue('Vidacha', $statement->pasport_data_vyda4i);
        $document->setValue('PasportKemVydan', $statement->pasport_kem_vydan);
        $document->setValue('DomTel', $statement->dom_tel);
        $document->setValue('MobTel', $statement->mob_tel);
        $document->setValue('Obrazovanie', $education->obrazovanie);
        $document->setValue('MestoRaboty',$statement->mesto_raboty);
        $document->setValue('About', $statement->about);

        $file = 'temp/'.
            $this->translit($statement->famil).'_'.
            $this->translit(UTF8::substr($statement->imya,0, 1)).'_'.
            $this->translit(UTF8::substr($statement->ot4estvo,0, 1)).'_'.
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
        return strtr($str, $tr);
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
