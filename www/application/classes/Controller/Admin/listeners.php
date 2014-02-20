<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Listeners extends Controller_Admin
{

    /**
     * генерация заявления без обязательных параметров.
     * @throws HTTP_Exception_404
     */
    public function action_statement_gen()
    {
        $this->auto_render = false;

        $statement = $this->request->post('statement');
        $post = $this->request->post();

        $nationality = '';
        $education = '';

        /**
         * запрос идёт на аяксом, там же просто нажатие на кнопку и ты отдаёшь док, всё.
         */
        if (/*Request::initial()->is_ajax() && */Security::is_token($post['csrf']))
        {
            if (isset($statement['nationality_id']))
            {
                $nationality = ORM::factory('Nationality')
                                  ->where('id', '=', $statement['nationality_id'])
                                  ->find()
                                  ->as_array();
            }
            if (isset($statement['education_id']))
            {
                $education = ORM::factory('Educations')
                                ->where('id', '=', $statement['education_id'])
                                ->find()
                                ->as_array();
            }

            $document = new TemplateDocx(APPPATH.'templates/zayavlenie/template.docx');

            $document->setValueArray(
                array(
                    'Fam' => $statement['famil'],
                    'Name' => $statement['imya'],
                    'Otchestvo' => $statement['ot4estvo'],
                    'DateBirth' => $statement['data_rojdeniya'],
                    'Nationality' => $nationality['grajdanstvo'],
                    'PlaceBirth' => $statement['mesto_rojdeniya'],
                    'AdresRegPoPasporty' => $statement['adres_reg_po_pasporty'],
                    'VremReg' => $statement['vrem_reg'],
                    'Seriya' => $statement['pasport_seriya'],
                    'Nomer' => $statement['pasport_nomer'],
                    'Vidacha' => $statement['pasport_data_vyda4i'],
                    'PasportKemVydan' => $statement['pasport_kem_vydan'],
                    'DomTel' => $statement['dom_tel'],
                    'MobTel' => $statement['mob_tel'],
                    'Obrazovanie' => $education['obrazovanie'],
                    'MestoRaboty' => $statement['mesto_raboty'],
                    'About' => $statement['about'],
                )
            );

            $file = APPPATH.'output_blanks/temp/zayavlenie_'.date('d_m_Y_H_i_s').'.docx';

            $document->save($file);
            unset($document);

            $this->response->send_file($file, null, array(
                'delete' => true
            ));
        }
        else
        {
            throw new HTTP_Exception_404();
        }

    }

    /**
     * генерация договора, в договор желетельно слать еще массив данных с заявления (в любом случае)
     * @throws HTTP_Exception_404
     */
    public function action_contract_gen()
    {
        $this->auto_render = false;

        $contract = $this->request->post('contract');
        $statement = $this->request->post('statement');
        $post = $this->request->post();

        // этот код (90-94) под сомнением, ведь если придет массив statements то там в любом случае будет сущ. и пустой $statement[$key]
        if (isset($statement))
            foreach ($statement as $key)
               if (!isset($statement[$key]))
                   $statement[$key] = '';

        if (/*Request::initial()->is_ajax() && */Security::is_token($post['csrf']))
        {
            $obj = new TemplateDocx(APPPATH.'templates/contract/dogovor.docx');

            $obj->setValueArray(
                array(
                    'Customer' => $contract['famil'].' '.$contract['imya'].' '.$contract['ot4estvo'],
                    'CSeriya' => $contract['pasport_seriya'],
                    'CNomer' => $contract['pasport_nomer'],
                    'CVidan' => $contract['pasport_kem_vydan'],
                    'CAddress' => $contract['adres_reg_po_pasporty'],
                    'CPhone' => $contract['phone'],

                    'Listener' => $statement['famil'].' '.$statement['imya'].' '.$statement['ot4estvo'],
                    'LSeriya' => $statement['pasport_seriya'],
                    'LNomer' => $statement['pasport_nomer'],
                    'LVidan' => $statement['pasport_kem_vydan'],
                    'LAddress' => $statement['adres_reg_po_pasporty'],
                    'LPhone' => $statement['mob_tel'],
                )
            );

            $file = APPPATH.'output_blanks/temp/dogovor_'.date('d_m_Y_H_i_s').'.docx';

            $obj->save($file);
            unset($document);

            $this->response->send_file($file, null, array(
                'delete' => true
            ));
        }
        else
        {
            throw new HTTP_Exception_404();
        }
    }

    public function action_g_add()
    {

        $csrf = $this->request->post('csrf');

        if (Request::initial()->is_ajax() && Security::is_token($csrf))
        {
            $email = $this->request->post('email');
            $statement = $this->request->post('statement');
            $contract = $this->request->post('contract');

            $newpass = Text::random();

            $user_data = array(
                'photo' =>  'img/photo.jpg',
                'email' =>  $email,
                'password' => Text::hash($newpass)
            );

            try
            {
                $id = ORM::factory('Users')
                         ->values($user_data)
                         ->create()
                         ->pk();

                $contract['user_id'] = $id;
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

            $message =
                View::factory('tmpmail/template',
                    array(
                          'content' => View::factory('tmpmail/lk/registr',
                                  array(
                                          'user' => $statement,
                                          'login' => $email,
                                          'pass' => $newpass
                                       ))
                          )
                );

            try
            {
                Email::factory('Регистрация в Автошколе МПТ', $message, 'text/html')
                     ->to($email)
                     ->from('info@auto.mpt.ru', 'Автошкола')
                     ->send();

                $this->ajax_msg('Слушатель зарегистрирован и добавлен в базу данных. Данные для входа отправлены на указанную почту.');
            }
            catch(Swift_SwiftException $e)
            {
                $this->ajax_msg($e->getMessage(), 'error');
            }
        } else {
            $Nationality = ORM::factory('Nationality')
                ->find_all();
            $Educations  = ORM::factory('Educations')
                ->find_all();

            $this->template->content =
                View::factory('admin/listeners/g_add', compact('Nationality', 'Educations'));
        }
    }

    public function action_distrib()
    {
        $u = new Model_Users();
        $audience = $u->get_user_list(true);

        $this->template->content =
            View::factory('admin/listeners/distrib', compact('audience'));
    }

}