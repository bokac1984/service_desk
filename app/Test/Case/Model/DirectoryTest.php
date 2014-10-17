<?php
App::uses('Directory', 'Model');

/**
 * Directory Test Case
 *
 */
class DirectoryTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Directory = ClassRegistry::init('Directory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Directory);

		parent::tearDown();
	}

}
