<?php
App::uses('TipoImovel', 'Model');

/**
 * TipoImovel Test Case
 *
 */
class TipoImovelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_imovel',
		'app.imovel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoImovel = ClassRegistry::init('TipoImovel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoImovel);

		parent::tearDown();
	}

}
