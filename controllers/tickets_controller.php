<?php
class TicketsController extends AppController {
/**
 * Name
 *
 * @var string $name
 */
	public $name = 'Tickets';  

// JW - component for plugin.
	public $components = array('Search.Prg');
	
/**
 * Fields to preset in search forms.
 *
 * @var array $presetVars
 * @see Search.PrgComponent 
 * @access public
 */
 
 // JW - Field names and type of search defined in plugin documentation.
 // JW - these are based on the search form field names. Type value as a more or less standard search. 
	public $presetVars = array( 
		array('field' => 'title', 'type' => 'value'),
		array('field' => 'status', 'type' => 'value'),
	);

/**
 * Before filter callback
 * Pass the correct Ticket data to the view where needed
 * 
 * @return void
 * @access public
 */
 
 // JW - Callbacks for data loading the add.ctp based on the model __construct() (see model for details).
	public function beforeFilter() {
		$this->set('statuses', $this->Ticket->statuses);
		$this->set('categories', $this->Ticket->categories);
		parent::beforeFilter();
	}
	
// JW - named paramters (passedArgs) and conditions passed from model plus methods (like commonProcess() & parseCriteria()) from component processed here to get the query done.
	public function index() {
		$this->Prg->commonProcess();
		$this->paginate = array( 
			'conditions' => $this->Ticket->parseCriteria($this->passedArgs));
		$this->set('tickets', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ticket', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticket', $this->Ticket->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->Ticket->create();
			if ($this->Ticket->save($this->data)) {
				$this->Session->setFlash(__('The ticket has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.', true));
			}
		}
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ticket->save($this->data)) {
				$this->Session->setFlash(__('The ticket has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ticket->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ticket', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ticket->delete($id)) {
			$this->Session->setFlash(__('Ticket deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
