<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Contracts extends ORM
{
	protected $_db = 'default';
    protected $_table_name  = 'Contracts';
    protected $_primary_key = 'id';
    protected $_primary_val = 'phone';

    protected $_table_columns = array(
		'id' => array('data_type' => 'int', 'is_nullable' => false),
		'famil' => array('data_type' => 'string', 'is_nullable' => false),
		'imya' => array('data_type' => 'string', 'is_nullable' => false),
		'ot4estvo' => array('data_type' => 'string', 'is_nullable' => false),
		'adres_reg_po_pasporty' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_seriya' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_nomer' => array('data_type' => 'string', 'is_nullable' => false),
		'pasport_kem_vydan' => array('data_type' => 'string', 'is_nullable' => false),
		'phone' => array('data_type' => 'string', 'is_nullable' => false),
	);
}