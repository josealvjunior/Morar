<?php
/**
 * CandidaturaFixture
 *
 */
class CandidaturaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_candidatura' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'co_usuario' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'co_vagas' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'data_registro' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_atualizacao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_cancelamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'co_candidatura', 'unique' => 1),
			'fk_Candidaturas_pessoa1_idx' => array('column' => 'co_usuario', 'unique' => 0),
			'fk_Candidaturas_Vagas1_idx' => array('column' => 'co_vagas', 'unique' => 0)
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
			'co_candidatura' => 1,
			'co_usuario' => 1,
			'co_vagas' => 1,
			'data_registro' => '2014-10-19',
			'data_atualizacao' => '2014-10-19',
			'data_cancelamento' => '2014-10-19'
		),
	);

}
