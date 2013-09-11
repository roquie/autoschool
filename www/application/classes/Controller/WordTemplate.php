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
            $this->ajax_data($error, null, 'error');
            exit;
        }

        /**
         * ====================================
         * Формирование заявления
         * ====================================
         */
        $document = new TemplateDocx(APPPATH.'templates/zayavlenie/template.docx');

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
        unset($document);
        /**
         * ====================================
         * Формирование договора
         * ====================================
         */
        $contract = new TemplateDocx(APPPATH.'templates/contract/dogovor.docx');


        // Если указано, что 18 лет, то заказчик сам слушатель, иначе родитель или опекун
        if ($this->getAge($data['data_rojdeniya']) > 18) {
            $customer = $this->upName($data['familiya']) . ' ' . $this->upName($data['imya']) . ' ' . $this->upName($data['ot4estvo']);
            $customer_seriya = $data['pasport_seriya'];
            $customer_nomer = $data['pasport_nomer'];
            $customer_vidan = $data['pasport_kem_vydan'];
            $customer_address = $data['adres_reg_po_pasporty'];
            $customer_phone = $data['mob_tel'];
        } else {
            $customer = $this->upName($data['familiyaCustomer']) . ' ' . $this->upName($data['imyaCustomer']) . ' ' . $this->upName($data['ot4estvoCustomer']);
            $customer_seriya = $data['pasport_seriyaCustomer'];
            $customer_nomer = $data['pasport_nomerCustomer'];
            $customer_vidan = $data['pasport_kem_vydanCustomer'];
            $customer_address = $data['adres_reg_po_pasportyCustomer'];
            $customer_phone = $data['phoneCustomer'];
        }

        $contract->setValue('Customer', $customer);
        $contract->setValue('CSeriya', $customer_seriya);
        $contract->setValue('CNomer', $customer_nomer);
        $contract->setValue('CVidan', $customer_vidan);
        $contract->setValue('CAddress', $customer_address);
        $contract->setValue('CPhone', $customer_phone);

        $contract->setValue('Listener', $this->upName($data['familiya']) . ' ' . $this->upName($data['imya']) . ' ' . $this->upName($data['ot4estvo']));
        $contract->setValue('LSeriya', $data['pasport_seriya']);
        $contract->setValue('LNomer', $data['pasport_nomer']);
        $contract->setValue('LVidan', $data['pasport_kem_vydan']);
        $contract->setValue('LAddress', empty($data['adres_reg_po_pasporty']) ? $data['vrem_reg'] : $data['adres_reg_po_pasporty']);
        $contract->setValue('LPhone', $data['mob_tel']);

        $contr = 'contracts/contract_'.date('d_m_Y_H_i_s').'.docx';

        $contract->save(APPPATH.'output_blanks/'.$contr);

        $this->ajax_msg(
            View::factory('main/blank/result', array(
                'statement' => URL::site('updownload/'.$file),
                'contract' => URL::site('updownload/contracts/contract_'.date('d_m_Y_H_i_s').'.docx'),
                'age' => $this->getAge($data['data_rojdeniya'])
            ))->render()
        );

    }

    protected function getAge($age) {
        $mas = explode('.', $age);
        if($mas[1] > date('m') || $mas[1] == date('m') && $mas[0] > date('d'))
            return (date('Y') - $mas[2] - 1);
        else
            return (date('Y') - $mas[2]);
    }

    protected function upName($name)
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

