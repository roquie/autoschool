<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Statements extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Statements';
    protected $_primary_key = 'id';

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

    protected $_has_one = array(
        'Nationality' => array(
            'model' => 'Nationality',
            'foreign_key' => 'nationality_id',
        ),
        'Educations' => array(
            'model' => 'Educations',
            'foreign_key' => 'education_id',
        ),


    );





}