<?php
App::uses('Message', 'Model');

/**
 * Message Test Case
 *
 */
class MessageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.message',
		'app.user',
		'app.group',
		'app.service_request',
		'app.status',
		'app.category',
		'app.solver',
		'app.priority',
		'app.service_requests_h',
		'app.direktorijum',
		'app.document',
		'app.direktorijums_document',
		'app.users_document'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Message = ClassRegistry::init('Message');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Message);

		parent::tearDown();
	}

}
