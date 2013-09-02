<?php defined('SYSPATH') or die('No direct script access.');

class Controller_WordTemplate extends Controller_Ajax
{

    /**
     * метод добавляет данные в шаблон из формы на сайте - заявление.
     *
     * */

    public function action_zayavlenie()
    {

        $data = array();
        foreach ($_POST as $key => $value)
            $data[$key] = Security::xss_clean($value);

        $error = array();
        foreach ($data as $key => $value)
        {
            if (empty($value)) {
                if ((Arr::get($_POST, 'toggleReg') === null && $key === 'vrem_reg') ||
                    (Arr::get($_POST, 'toggleReg') !== null && $key === 'adres_reg_po_pasporty'))
                    continue;
                $error[] = $key;
            }
        }

        if (!empty($error))
        {
            $this->ajax_data($error, null, 'empty');
            exit;
        }

/*        $this->ajax_msg('Файла шаблона нет и/или не читается', 'error');
        exit;*/

        $PHPWord = new PHPWord();
        $path = APPPATH.'templates/zayavlenie/template.docx';

        if (is_readable($path))
            $document = $PHPWord->loadTemplate($path, 2); // задаётся лимит
        else
            $this->ajax_msg('Файла шаблона нет и/или не читается', 'error');
        

        /**
         * ====================================
         * Формирование заявления
         * ====================================
         */
        /**
         * Левая сторона бланка
         */


       // $document->setValue('VU', '');
        $document->setValue('Fam', $this->upName($data['familiya']));
        $document->setValue('Name', $this->upName($data['imya']));
        $document->setValue('Otchestvo', $this->upName($data['ot4estvo']));
        $document->setValue('DateBirth', $data['data_rojdeniya']);
        $document->setValue('Nationality', $data['grajdanstvo']);
        $document->setValue('PlaceBirth', $data['mesto_rojdeniya']);
        $document->setValue('AdresRegPoPasporty', $data['adres_reg_po_pasporty']);
        $document->setValue('VremReg', $data['vrem_reg']);
        $document->setValue('Seriya',$data['pasport_seriya']);
        $document->setValue('Nomer', $data['pasport_nomer']);
        $document->setValue('Vidacha', $data['pasport_data_vyda4i']);
        $document->setValue('PasportKemVydan', $data['pasport_kem_vydan']);
        $document->setValue('DomTel', $data['dom_tel']);
        $document->setValue('MobTel', $data['mob_tel']);
        $document->setValue('Obrazovanie', $data['obrazovanie']);
        $document->setValue('MestoRaboty',$data['mesto_raboty']);
        $document->setValue('About', $data['about']);


        $file = 'zayavleniya/zayavlenie_'.date('d_m_Y_H_i_s').'.docx';

        $document->save(APPPATH.'output_blanks/'.$file);

        /**
         * ====================================
         * Формирование договора
         * ====================================
         */

        $path = APPPATH.'templates/contract/contract.docx';

        if (is_readable($path))
            $contract = $PHPWord->loadTemplate($path, 2);
        else
            $this->ajax_msg('Файла шаблона нет и/или не читается', 'error');

        // Если указано, что 18 лет, то заказчик сам слушатель, иначе родитель или опекун
        if (isset($data['age'])) {
            $customer = $this->upName($data['familiya']) . ' ' . $this->upName($data['imya']) . ' ' . $this->upName($data['ot4estvo']);
        } else {
            $customer = $this->upName($data['familiyaCustomer']) . ' ' . $this->upName($data['imyaCustomer']) . ' ' . $this->upName($data['ot4estvoCustomer']);
        }

        //@todo setValue - limit in preg_replace
        $contract->setValue('Customer', $customer);
        $contract->setValue('Listener', $this->upName($data['familiya']) . ' ' . $this->upName($data['imya']) . ' ' . $this->upName($data['ot4estvo']));


        $contr = 'contract/contract_'.date('d_m_Y_H_i_s').'.docx';

        $contract->save(APPPATH.'output_blanks/'.$contr);

        $this->ajax_msg(
            View::factory('main/blank/result', array(
                'statement' => URL::site('updownload/'.$file),
                'contract' => URL::site('updownload/'.$contr),
            ))->render()
        );

//        $this->template->content = View::factory('main/word');
    }

    public function upName($name)
    {
        return UTF8::ucfirst(UTF8::strtolower($name));
    }


}

/* заголовки для скачивания файлов ворда
 header('Content-disposition: inline');
        header('Content-type: application/msword');
        readfile($file);
        exit;
 */

