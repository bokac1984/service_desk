<?php
App::uses('ServiceRequestsH', 'Model');

/**
 * ServiceRequestsH Test Case
 *
 */
class ServiceRequestsHTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_requests_h',
		'app.service_request',
		'app.status',
		'app.user',
		'app.group',
		'app.solver',
		'app.category',
		'app.priority'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServiceRequestsH = ClassRegistry::init('ServiceRequestsH');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceRequestsH);

		parent::tearDown();
	}

}
