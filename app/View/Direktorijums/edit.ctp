<div class="direktorijums form">
<?php echo $this->Form->create('Direktorijum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Direktorijum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('Document');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Direktorijum.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Direktorijum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Direktorijums'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direktorijums'), array('controller' => 'direktorijums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Direktorijum'), array('controller' => 'direktorijums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
