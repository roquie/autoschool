<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Statements extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Statements';
   // protected $_primary_key = 'user_id';


    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'user_id' => array('data_type' => 'int', 'is_nullable' => false),
		'famil' => array('data_type' => 'string', 'is_nullable' => false),
		'imya' => array('data_type' => 'string', 'is_nullable' => false),
		'ot4estvo' => array('data_type' => 'string', 'is_nullable' => false),
		'data_rojdeniya' => array('data_type' => 'string', 'is_nullable' => false),
		'mesto_rojdeniya' => array('data_type' => 'string', 'is_nullable' => false),
		'adres_reg_po_pasporty' => array('data_type' => 'string', 'is_nullable' => false),
		'vrem_reg' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_seriya' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_nomer' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_data_vyda4i' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_kem_vydan' => array('data_type' => 'string', 'is_nullable' => false),
		'mob_tel' => array('data_type' => 'string', 'is_nullable' => false),
		'dom_tel' => array('data_type' => 'string', 'is_nullable' => false),
		'mesto_raboty' => array('data_type' => 'string', 'is_nullable' => false),
		'about' => array('data_type' => 'string', 'is_nullable' => false),
		'nationality_id' => array('data_type' => 'int', 'is_nullable' => false),
		'education_id' => array('data_type' => 'int', 'is_nullable' => false),
	);

    protected $_belongs_to = array(
        'Nationality' => array(
            'model' => 'Nationality',
            'foreign_key' => 'nationality_id',
        ),
        'Educations' => array(
            'model' => 'Educations',
            'foreign_key' => 'education_id',
        ),


    );


    public function rules()
    {
        return array(

            'famil' => array(
                array('not_empty'),
                array('alpha', array(':value', true)),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 50)),
            ),
            'imya' => array(
                array('not_empty'),
                array('alpha', array(':value', true)),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 50)),
            ),
            'ot4estvo' => array(
                array('alpha', array(':value', true)),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 50)),
            ),
            'data_rojdeniya' => array(
                array('not_empty'),
                array('date')
            ),
            'mesto_rojdeniya' => array(
                array('not_empty'),
              //  array('alpha_numeric', array(':value', true)),
             //   array('alpha', array(':value', true)),
            ),

            'adres_reg_po_pasporty' => array(
              //  array('alpha_numeric', array(':value', true)),
              //  array('alpha', array(':value', true)),
            ),

            'vrem_reg' => array(
               // array('alpha_numeric', array(':value', true)),
               // array('alpha', array(':value', true)),
            ),
            'pasport_seriya' => array(
                array('not_empty'),
                array('alpha_numeric', array(':value', true)),
            ),
            'pasport_nomer' => array(
                array('not_empty'),
                array('alpha_numeric', array(':value', true)),
            ),
            'pasport_data_vyda4i' => array(
                array('not_empty'),
                array('date')
            ),
            'pasport_kem_vydan' => array(
                array('not_empty'),
               // array('alpha_space', array(':value')),
            ),
            'mob_tel' => array(
                array('not_empty'),
            ),
            'dom_tel' => array(
            ),
            'mesto_raboty' => array(
                array('not_empty'),
             //   array('alpha', array(':value', true)),
            ),
            'about' => array(
                array('not_empty'),
                array('alpha', array(':value', true)),
            ),
            'nationality_id' => array(
                array('not_empty'),
                array('digit'),
            ),
            'education_id' => array(
                array('not_empty'),
                array('digit'),
            ),
            'user_id' => array(
                array('digit'),
            ),

        );
    }


    public function labels()
    {
        return array(
            'user_id' => 'id пользователя',
            'famil' => 'Поле "Фамилия"',
            'imya' => 'Поле "Имя"',
            'ot4estvo' => 'Поле "Отчество"',
            'data_rojdeniya' => 'Поле "Дата рождения"',
            'mesto_rojdeniya' => 'Поле "Место рождения"',
            'adres_reg_po_pasporty' => 'Поле "Адрес рег. по паспорту"',
            'vrem_reg' => 'Поле "Временная регистрация"',
            'pasport_seriya' => 'Поле "Серия паспорта"',
            'pasport_nomer' => 'Поле "Номер паспорта"',
            'pasport_data_vyda4i' => 'Поле "Дата выдачи паспорта"',
            'pasport_kem_vydan' => 'Поле "Кем выдан паспорт"',
            'mob_tel' => 'Поле "Мобильный тел."',
            'dom_tel' => 'Поле "Домашний тел."',
            'mesto_raboty' => 'Поле "Место работы"',
            'about' => 'Поле "О нас"',
            'nationality_id' => 'id гражданства',
            'education_id' => 'id образования',

        );
    }

    public function filters()
    {
        return array(
            true => array(
                array('trim'),
                array('Security::xss_clean', array(':value')),
            )
        );
    }





}