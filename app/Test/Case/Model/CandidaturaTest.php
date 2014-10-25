<?php
App::uses('Candidatura', 'Model');

/**
 * Candidatura Test Case
 *
 */
class CandidaturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.candidatura'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Candidatura = ClassRegistry::init('Candidatura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Candidatura);

		parent::tearDown();
	}

}
