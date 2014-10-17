<?php
App::uses('DocumentsController', 'DocumentManager.Controller');

/**
 * DocumentsController Test Case
 *
 */
class DocumentsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.document_manager.document',
		'plugin.document_manager.direktorijum',
		'plugin.document_manager.user',
		'plugin.document_manager.group',
		'plugin.document_manager.service_request',
		'plugin.document_manager.status',
		'plugin.document_manager.category',
		'plugin.document_manager.solver',
		'plugin.document_manager.priority',
		'plugin.document_manager.service_requests_h',
		'plugin.document_manager.direktorijums_document',
		'plugin.document_manager.users_document'
	);

}
