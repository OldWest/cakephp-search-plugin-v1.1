<?php
class M4d3814afd7d44473b3220aa40e7e8ef6 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			// 'create_table' => array(
				// 'tickets' => array(
					// 'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
					// 'status' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 64),
					// 'category' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
					// 'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 300),
					// 'content' => array('type'=>'text', 'null' => true),
					// 'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					// 'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
					// 'indexes' => array(
						// 'PRIMARY' => array('column' => 'id', 'unique' => 1)),
				// ),
			// ),
		),
		'down' => array(
			'drop_table' => array('tickets'))
	); 
	
/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		if ($direction == 'up') {
			$Ticket = $this->generateModel('tickets');
			$data = array(
				array(
					'status' => 'open',
					'category' => 'task',
					'title' => 'first task',
					'content' => 'task description',
				),
				array(
					'status' => 'open',
					'category' => 'bug',
					'title' => 'first bug',
					'content' => 'bug description',
				),
				array(
					'status' => 'closed',
					'category' => 'task',
					'title' => 'other task',
					'content' => 'other task description',
				),
			);
			$Ticket->saveAll($data);
		}
		return true;
	}
}
?>