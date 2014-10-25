<?php
/**
 * PessoaFixture
 *
 */
class PessoaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_usuario' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'senha' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sexo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_atualizacao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_Criacao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_Cancelamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_Nascimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'co_usuario', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_usuario' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'senha' => 'Lorem ipsum dolor sit amet',
			'telefone' => 'Lorem ipsum dolor sit amet',
			'sexo' => 'Lorem ipsum dolor sit ame',
			'data_atualizacao' => '2014-10-19',
			'data_Criacao' => '2014-10-19',
			'data_Cancelamento' => '2014-10-19',
			'data_Nascimento' => '2014-10-19'
		),
	);

}
