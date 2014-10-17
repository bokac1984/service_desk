<?php
App::uses('Direktorijum', 'Model');

/**
 * Direktorijum Test Case
 *
 */
class DirektorijumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.direktorijum',
		'app.user',
		'app.group',
		'app.service_request',
		'app.status',
		'app.category',
		'app.solver',
		'app.priority',
		'app.service_requests_h',
		'app.document',
		'app.direktorijums_document'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Direktorijum = ClassRegistry::init('Direktorijum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Direktorijum);

		parent::tearDown();
	}

}
