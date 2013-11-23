<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Contracts extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Contracts';
    protected $_primary_key = 'id';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'user_id' => array('data_type' => 'int', 'is_nullable' => false),
		'famil' => array('data_type' => 'string', 'is_nullable' => false),
		'imya' => array('data_type' => 'string', 'is_nullable' => false),
		'ot4estvo' => array('data_type' => 'string', 'is_nullable' => false),
		'adres_reg_po_pasporty' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_seriya' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_nomer' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_kem_vydan' => array('data_type' => 'string', 'is_nullable' => false),
		'phone' => array('data_type' => 'string', 'is_nullable' => false),
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

            'adres_reg_po_pasporty' => array(
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
            'pasport_kem_vydan' => array(
                array('not_empty'),
                array('alpha_dash', array(':value', true)),
            ),
            'phone' => array(
                array('Security::xss_clean', array(':value')),
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
            'adres_reg_po_pasporty' => 'Адрес рег. по паспорту',
            'pasport_seriya' => 'Серия паспорта',
            'pasport_nomer' => 'Номер паспорта',
            'pasport_data_vyda4i' => 'Дата выдачи паспорта',
            'pasport_kem_vydan' => '"Кем выдан паспорт" -',
            'phone' => 'Телефон',
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