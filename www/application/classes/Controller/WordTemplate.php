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
            foreach ($value as $k => $v)
            $data[$key][$k] = Security::xss_clean($v);

        $error = array();
        foreach ($data as $key => $value)
            foreach ($value as $k => $v)
            {
                if (empty($v) && $key != 'contract') {
                    if (!isset($data['statement']['toggleReg']) && $k === 'vrem_reg')
                        continue;
                    $error[$key][] = $k;
                }
            }

        if (!empty($error))
        {
            $this->ajax_data($error, null, 'empty');
            exit;
        }
/*
        $this->ajax_msg($data['contract']['familiyaCustomer'], 'error');
        exit;
*/
        /**
         * ====================================
         * Формирование заявления
         * ====================================
         */
        $document = new TemplateDocx(APPPATH.'templates/zayavlenie/template.docx');

        $document->setValue('Fam', $this->upName($data['statement']['familiya']));
        $document->setValue('Name', $this->upName($data['statement']['imya']));
        $document->setValue('Otchestvo', $this->upName($data['statement']['ot4estvo']));
        $document->setValue('DateBirth', $data['statement']['data_rojdeniya']);
        $document->setValue('Nationality', $data['statement']['grajdanstvo']);
        $document->setValue('PlaceBirth', $data['statement']['mesto_rojdeniya']);
        $document->setValue('AdresRegPoPasporty', $data['statement']['adres_reg_po_pasporty']);
        $document->setValue('VremReg', $data['statement']['vrem_reg']);
        $document->setValue('Seriya',$data['statement']['pasport_seriya']);
        $document->setValue('Nomer', $data['statement']['pasport_nomer']);
        $document->setValue('Vidacha', $data['statement']['pasport_data_vyda4i']);
        $document->setValue('PasportKemVydan', $data['statement']['pasport_kem_vydan']);
        $document->setValue('DomTel', $data['statement']['dom_tel']);
        $document->setValue('MobTel', $data['statement']['mob_tel']);
        $document->setValue('Obrazovanie', $data['statement']['obrazovanie']);
        $document->setValue('MestoRaboty',$data['statement']['mesto_raboty']);
        $document->setValue('About', $data['statement']['about']);
        $file = 'zayavleniya/zayavlenie_'.date('d_m_Y_H_i_s').'.docx';

        $document->save(APPPATH.'output_blanks/'.$file);
        unset($document);

        /**
         * ====================================
         * Формирование договора
         * ====================================
         */
        $contract = new TemplateDocx(APPPATH.'templates/contract/dogovor.docx');

        // Если 18 лет и не указано, что заказчиком будет родитель, то заказчик сам слушатель, иначе родитель или опекун
        if ($this->getAge($data['statement']['data_rojdeniya']) < 18 && !isset($data['contract']['parent'])) {
            $this->ajax_msg('Вы не можете являться заказчиком, вам нет 18 лет.', 'error');
            exit;
        }

        $contract->setValue('Customer', $this->upName($data['contract']['familiyaCustomer']) . ' ' . $this->upName($data['contract']['imyaCustomer']) . ' ' . $this->upName($data['contract']['ot4estvoCustomer']));
        $contract->setValue('CSeriya', $data['contract']['pasport_seriyaCustomer']);
        $contract->setValue('CNomer', $data['contract']['pasport_nomerCustomer']);
        $contract->setValue('CVidan', $data['contract']['pasport_kem_vydanCustomer']);
        $contract->setValue('CAddress', $data['contract']['adres_reg_po_pasportyCustomer']);
        $contract->setValue('CPhone', $data['contract']['phoneCustomer']);

        $contract->setValue('Listener', $this->upName($data['statement']['familiya']) . ' ' . $this->upName($data['statement']['imya']) . ' ' . $this->upName($data['statement']['ot4estvo']));
        $contract->setValue('LSeriya', $data['statement']['pasport_seriya']);
        $contract->setValue('LNomer', $data['statement']['pasport_nomer']);
        $contract->setValue('LVidan', $data['statement']['pasport_kem_vydan']);
        $contract->setValue('LAddress', $data['statement']['adres_reg_po_pasporty']);
        $contract->setValue('LPhone', $data['statement']['mob_tel']);

        $contr = 'contracts/contract_'.date('d_m_Y_H_i_s').'.docx';

        $contract->save(APPPATH.'output_blanks/'.$contr);

        $this->ajax_msg(
            View::factory('main/blank/result', array(
                'statement' => URL::site('updownload/'.$file),
                'contract' => URL::site('updownload/'.$contr),
                'age' => $this->getAge($data['statement']['data_rojdeniya'])
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

