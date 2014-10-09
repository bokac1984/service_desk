<?php
App::uses('Priority', 'Model');

/**
 * Priority Test Case
 *
 */
class PriorityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.priority',
		'app.service_request'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Priority = ClassRegistry::init('Priority');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Priority);

		parent::tearDown();
	}

}
