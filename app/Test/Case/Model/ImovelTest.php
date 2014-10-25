<?php
App::uses('Imovel', 'Model');

/**
 * Imovel Test Case
 *
 */
class ImovelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imovel',
		'app.tipo_imovel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Imovel = ClassRegistry::init('Imovel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Imovel);

		parent::tearDown();
	}

}
