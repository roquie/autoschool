<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Statements extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Statements';
    protected $_primary_key = 'user_id';


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
                array('Security::xss_clean', array(':value')),
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
                array('alpha_numeric', array(':value', true)),
                array('alpha_dash', array(':value', true)),
            ),

            'adres_reg_po_pasporty' => array(
                array('Security::xss_clean', array(':value')),
                array('alpha_numeric', array(':value', true)),
                array('alpha_dash', array(':value', true)),
            ),

            'vrem_reg' => array(
                array('Security::xss_clean', array(':value')),
                array('alpha_numeric', array(':value', true)),
                array('alpha_dash', array(':value', true)),
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
                array('alpha_dash', array(':value', true)),
            ),
            'mob_tel' => array(
                array('not_empty'),
            ),
            'dom_tel' => array(
                array('Security::xss_clean', array(':value')),
            ),
            'mesto_raboty' => array(
                array('not_empty'),
                array('alpha_dash', array(':value', true)),
            ),
            'about' => array(
                array('not_empty'),
                array('alpha_dash', array(':value', true)),
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
                array('Security::xss_clean', array(':value')),
                array('digit'),
            ),

        );
    }


    public function labels()
    {
        return array(
            'user_id' => 'id пользователя',
            'famil' => 'Фамилия',
            'imya' => 'Имя',
            'ot4estvo' => 'Отчество',
            'data_rojdeniya' => 'Дата рождения',
            'mesto_rojdeniya' => 'Место рождения',
            'adres_reg_po_pasporty' => 'Адрес рег. по паспорту',
            'vrem_reg' => 'Временная регистрация',
            'pasport_seriya' => 'Серия паспорта',
            'pasport_nomer' => 'Номер паспорта',
            'pasport_data_vyda4i' => 'Дата выдачи паспорта',
            'pasport_kem_vydan' => '"Кем выдан паспорт" -',
            'mob_tel' => 'Мобильный тел.',
            'dom_tel' => 'Домашний тел.',
            'mesto_raboty' => 'Место работы',
            'about' => '"О нас" -',
            'nationality_id' => 'id гражданства',
            'education_id' => 'id образования',

        );
    }

    public function filters()
    {
        return array(
            true => array(
                array('trim')
            )
        );
    }





}