<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Func_Documents extends Controller_Main
{

    public function before()
    {
        parent::before();

        $this->auto_render = false;
        if(Request::initial() === Request::current())
            HTTP::redirect('/');
    }


    public function action_download()
    {
        //Request::factory('func/documents/download/ticket-1')->execute();
        $params = $this->request->param('id');
        $params = explode('-', $params);

        if ($params[0] === 'zip') {

            $contact = $this->create_contract($params[1]);
            $statement = $this->create_statement($params[1]);
            $ticket = $this->create_ticket($params[1]);

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

        } else {
            $path = $this->{'create_'.$params[0]}($params[1]);
            $this->response->send_file(APPPATH.'output_blanks/'.$path, null, array(
                'delete' => true
            ));
        }
    }

    public function action_get()
    {
        $params = $this->request->param('id');
        $params = explode('-', $params);

        switch($params[0])
        {
            case 'contract':
             $this->ajax_data(
                 array(
                     'file' => $this->create_contract($params[1]),
                     'url' => URL::site('download/after_del'),
                 )
             );
            break;
            case 'statement':
             $this->ajax_data(
                 array(
                     'file' => $this->create_statement($params[1]),
                     'url' => URL::site('download/after_del'),
                 )
             );
            break;
            case 'ticket':
             $this->ajax_data(
                 array(
                     'file' => $this->create_ticket($params[1]),
                     'url' => URL::site('download/after_del'),
                 )
             );
            break;
        }
    }


    protected function create_ticket($id)
    {
        $contract = Model::factory('Contracts')->getBy('user_id', $id);

        $obj = new TemplateDocx(APPPATH.'templates/ticket/ticket.docx');

        $famil = UTF8::ucfirst(UTF8::strtolower($contract->famil));
        $imya = UTF8::ucfirst(UTF8::strtolower(UTF8::substr($contract->imya, 0, 1).'. '));
        $ot4estvo = UTF8::ucfirst(UTF8::strtolower(UTF8::substr($contract->ot4estvo, 0, 1).'.'));

        $obj->setValue('Customer', $famil.' '.$imya.' '.$ot4estvo);

        $file = 'temp/'.
            $this->translit($contract->famil).'_'.
            $this->translit(UTF8::substr($contract->imya, 0, 1)).'_'.
            $this->translit(UTF8::substr($contract->ot4estvo, 0, 1)).'_'.
            'kvitanciya_'.date('d_m_Y_H_i_s').'.docx';

        $obj->save(APPPATH.'output_blanks/'.$file);

        unset($document);
        return $file;
    }

    protected function create_contract($id)
    {
        $contract = Model::factory('Contracts')->getBy('user_id', $id);
        $statement = Model::factory('Statements')->getBy('user_id', $id);

        $obj = new TemplateDocx(APPPATH.'templates/contract/dogovor.docx');

        $obj->setValueArray(
            array(
                'Customer' => $contract->famil.' '.$contract->imya.' '.$contract->ot4estvo,
                'CSeriya' => $contract->pasport_seriya,
                'CNomer' => $contract->pasport_nomer,
                'CVidan' => $contract->pasport_kem_vydan,
                'CAddress' => $contract->adres_reg_po_pasporty,
                'CPhone' => $contract->phone,

                'Listener' => $statement->famil.' '.$statement->imya.' '.$statement->ot4estvo,
                'LSeriya' => $statement->pasport_seriya,
                'LNomer' => $statement->pasport_nomer,
                'LVidan' => $statement->pasport_kem_vydan,
                'LAddress' => $statement->adres_reg_po_pasporty,
                'LPhone' => $statement->mob_tel,
            )
        );

        $contr = 'temp/'.
            $this->translit($contract->famil).'_'.
            $this->translit(UTF8::substr($contract->imya,0, 1)).'_'.
            $this->translit(UTF8::substr($contract->ot4estvo,0, 1)).'_'.
            'dogovor_'.date('d_m_Y_H_i_s').'.docx';

        $obj->save(APPPATH.'output_blanks/'.$contr);

        unset($document);
        return $contr;
    }

    protected function create_statement($id)
    {

        $statement = Model::factory('Statements')->getBy('user_id', $id);

        $document = new TemplateDocx(APPPATH.'templates/zayavlenie/template.docx');

        $nationality = Model::factory('Nationality')->getBy('id', $statement->nationality_id);
        $education = Model::factory('Educations')->getBy('id', $statement->education_id);

        $document->setValueArray(
            array(
                'Fam' => $statement->famil,
                'Name' => $statement->imya,
                'Otchestvo' => $statement->ot4estvo,
                'DateBirth' => $statement->data_rojdeniya,
                'Nationality' => $nationality->grajdanstvo,
                'PlaceBirth' => $statement->mesto_rojdeniya,
                'AdresRegPoPasporty' => $statement->adres_reg_po_pasporty,
                'VremReg' => $statement->vrem_reg,
                'Seriya' => $statement->pasport_seriya,
                'Nomer' => $statement->pasport_nomer,
                'Vidacha' => $statement->pasport_data_vyda4i,
                'PasportKemVydan' => $statement->pasport_kem_vydan,
                'DomTel' => $statement->dom_tel,
                'MobTel' => $statement->mob_tel,
                'Obrazovanie' => $education->obrazovanie,
                'MestoRaboty' => $statement->mesto_raboty,
                'About' => $statement->about,
            )
        );

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

}
