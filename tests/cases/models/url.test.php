<?php
/* Url Test cases generated on: 2011-03-19 13:50:54 : 1300503054*/
App::import('Model', 'Url');

class UrlTestCase extends CakeTestCase {
	var $fixtures = array('app.url', 'app.user');

	function startTest() {
		$this->Url =& ClassRegistry::init('Url');
	}

	function endTest() {
		unset($this->Url);
		ClassRegistry::flush();
	}

}
?>