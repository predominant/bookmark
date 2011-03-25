<div class="urls view">
<h2><?php  __('Url');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $url['Url']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($url['User']['id'], array('controller' => 'users', 'action' => 'view', $url['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $url['Url']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $url['Url']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $url['Url']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $url['Url']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $url['Url']['modified']; ?>
			&nbsp;
		</dd>

	<?php
	$rated = Set::extract('/Rating[user_id=' . $authUser['User']['id'] . ']', $url);
	if (empty($rated)): ?>
		<dt><?php __('Rate'); ?></dt>
		<dd>
		<?php echo $this->Rating->display(array(
		    'item' => $url['Url']['id'],
		    'type' => 'radio',
		    'stars' => 5,
		    'createForm' => array(
				'url' => array_merge(
					$this->passedArgs,
					array(
						'rate' => $url['Url']['id'],
						'redirect' => true))
				)
		)); ?>
		&nbsp;
		</dd>
	<?php else: ?>
		<dt><?php __('Rating'); ?></dt>
		<dd>
			<?php
			$ratings = Set::extract('/Rating/value', $url);
			echo array_sum($ratings) / count($ratings); ?>
			&nbsp;
		</dd>
	<?php endif; ?>

	<dt>Thumbnail</dt>
	<dd>
		<?php echo $this->Thumboo->image($url['Url']['url']); ?>
	</dd>


	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Url', true), array('action' => 'edit', $url['Url']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Url', true), array('action' => 'delete', $url['Url']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $url['Url']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Urls', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Url', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
