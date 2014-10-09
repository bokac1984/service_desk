<?php
App::uses('ServiceRequest', 'Model');

/**
 * ServiceRequest Test Case
 *
 */
class ServiceRequestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_request',
		'app.status',
		'app.user',
		'app.group',
		'app.service_requests_h',
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
		$this->ServiceRequest = ClassRegistry::init('ServiceRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceRequest);

		parent::tearDown();
	}

}
