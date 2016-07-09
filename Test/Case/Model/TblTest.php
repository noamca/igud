<?php
App::uses('Tbl', 'Model');

/**
 * Tbl Test Case
 *
 */
class TblTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tbl'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tbl = ClassRegistry::init('Tbl');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tbl);

		parent::tearDown();
	}

}
