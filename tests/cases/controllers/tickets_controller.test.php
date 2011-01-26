<?php
/* Tickets Test cases generated on: 2011-01-20 14:07:08 : 1295521628*/
App::import('Controller', 'Tickets');

class TestTicketsController extends TicketsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TicketsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket');

	function startTest() {
		$this->Tickets =& new TestTicketsController();
		$this->Tickets->constructClasses();
	}

	function endTest() {
		unset($this->Tickets);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>