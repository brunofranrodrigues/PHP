<?php
App::uses('Balancete', 'Model');

/**
 * Balancete Test Case
 *
 */
class BalanceteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.balancete',
		'app.situacao',
		'app.despesa',
		'app.capgtipo',
		'app.usuario',
		'app.receita',
		'app.cartipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Balancete = ClassRegistry::init('Balancete');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Balancete);

		parent::tearDown();
	}

}
