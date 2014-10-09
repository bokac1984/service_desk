<?php
App::uses('Solver', 'Model');

/**
 * Solver Test Case
 *
 */
class SolverTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solver',
		'app.category',
		'app.service_request',
		'app.status',
		'app.user',
		'app.group',
		'app.service_requests_h',
		'app.priority'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Solver = ClassRegistry::init('Solver');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Solver);

		parent::tearDown();
	}

}
