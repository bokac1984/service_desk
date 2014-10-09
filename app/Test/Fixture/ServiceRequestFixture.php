<?php
/**
 * ServiceRequestFixture
 *
 */
class ServiceRequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'priority_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'assigned_to' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'naziv_zahtjeva' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'opis_zahtjeva' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_assigned_to' => array('column' => 'user_id', 'unique' => 0),
			'FK_belongs_to_service' => array('column' => 'category_id', 'unique' => 0),
			'FK_created_request' => array('column' => 'assigned_to', 'unique' => 0),
			'FK_has_priorities' => array('column' => 'priority_id', 'unique' => 0),
			'FK_has_status' => array('column' => 'status_id', 'unique' => 0)
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
			'status_id' => 1,
			'user_id' => 1,
			'category_id' => 1,
			'priority_id' => 1,
			'assigned_to' => 1,
			'naziv_zahtjeva' => 'Lorem ipsum dolor sit amet',
			'opis_zahtjeva' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-09-09 14:27:58',
			'modified' => '2014-09-09 14:27:58'
		),
	);

}
