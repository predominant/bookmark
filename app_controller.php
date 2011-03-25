<?php
class AppController extends Controller {
	public $components = array('Auth', 'Session');

	public function beforeFilter() {
		$this->set('authUser', $this->Auth->user());
	}

}
