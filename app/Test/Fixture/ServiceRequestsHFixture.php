<?php
/**
 * ServiceRequestsHFixture
 *
 */
class ServiceRequestsHFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'service_requests_h';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'service_request_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'status_h' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'assigned_to' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sekvenca' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'ip' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_changed_table' => array('column' => 'user_id', 'unique' => 0),
			'FK_has_history' => array('column' => 'service_request_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'service_request_id' => 1,
			'status_h' => 1,
			'assigned_to' => 1,
			'sekvenca' => 1,
			'created' => '2014-09-09 14:28:13',
			'user_id' => 1,
			'ip' => 'Lorem ipsum dolor sit amet'
		),
	);

}
