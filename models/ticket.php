<?php
class Ticket extends AppModel {
/**
 * Name
 *
 * @var string $name
 */
	public $name = 'Ticket';

/**
 * Validation parameters - initialized in constructor  
 *
 * @var array
 */ 
	public $validate = array(  
		'status' => array(
			'notempty' => array(
				'rule' => array('notempty'))),
		'category' => array(
			'notempty' => array(
				'rule' => array('notempty'))),
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'))));

/**
 * Behaviors
 *
 * @var array
 * @access public
 */
 
// JW - Behavior initiated from plugin. 
	public $actsAs = array(
		'Search.Searchable');

/**
 * Field names accepted for search queries.
 *
 * @var array
 * @see SearchableBehavior
 */
 
 // JW - Search fields data description for processing.
	public $filterArgs = array(
		array('name' => 'title', 'type' => 'query', 'method' => 'filterTitle'),
		array('name' => 'status', 'type' => 'string'),
	);
		
/**
 * Constructor
 *
 * @param mixed $id Model ID
 * @param string $table Table name
 * @param string $ds Datasource
 * @access public
 */
 
// JW - Data constructed for add.ctp
	public function __construct($id = false, $table = null, $ds = null) {
		$this->statuses = array(
			'open' => __('Open', true),
			'closed' => __('Closed', true));
		$this->categories = array(
			'bug' => __('Bug', true),
			'support' => __('Support', true),
			'technical' => __('Technical', true),
			'other' => __('Other', true));
		parent::__construct($id, $table, $ds);
	}
	
// JW - method as decalred in $filterArgs to process the free form search.
	public function filterTitle($data, $field = null) {
		if (empty($data['title'])) {
			return array();
		}
		$title = '%' . $data['title'] . '%';
		return array(
			'OR'  => array(
				$this->alias . '.title LIKE' => $title,
				$this->alias . '.content LIKE' => $title,
			));
	}
	
}
