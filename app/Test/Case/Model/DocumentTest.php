<?php
App::uses('Document', 'Model');

/**
 * Document Test Case
 *
 */
class DocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.document',
		'app.direktorijum',
		'app.user',
		'app.group',
		'app.service_request',
		'app.status',
		'app.category',
		'app.solver',
		'app.priority',
		'app.service_requests_h',
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
		$this->Document = ClassRegistry::init('Document');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Document);

		parent::tearDown();
	}

}
