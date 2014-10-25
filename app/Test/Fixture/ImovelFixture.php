<?php
/**
 * ImovelFixture
 *
 */
class ImovelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_imovel' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'co_usuario' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'tipo_imovel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'Valor_Aluguel' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'co_imovel', 'unique' => 1),
			'fk_Imovel_Tipo_Imovel1_idx' => array('column' => 'tipo_imovel_id', 'unique' => 0),
			'fk_imovel_pessoa1_idx' => array('column' => 'co_usuario', 'unique' => 0)
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
			'co_imovel' => 1,
			'co_usuario' => 1,
			'tipo_imovel_id' => 1,
			'Valor_Aluguel' => ''
		),
	);

}
