<?php
App::uses('Document', 'DocumentManager.Model');

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
		'plugin.document_manager.document',
		'plugin.document_manager.user',
		'plugin.document_manager.group',
		'plugin.document_manager.service_request',
		'plugin.document_manager.status',
		'plugin.document_manager.category',
		'plugin.document_manager.solver',
		'plugin.document_manager.priority',
		'plugin.document_manager.service_requests_h'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Document = ClassRegistry::init('DocumentManager.Document');
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
