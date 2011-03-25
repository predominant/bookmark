<?php
echo $this->Form->create('User');

	echo $this->Form->input('username', array(
		'label' => sprintf(__('Whats your name %s?', true), 'dawg')));
	echo $this->Form->input('password');

echo $this->Form->end('login');
