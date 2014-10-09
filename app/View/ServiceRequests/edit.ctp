<div class="serviceRequests form">
<?php echo $this->Form->create('ServiceRequest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Service Request'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('priority_id');
		echo $this->Form->input('assigned_to');
		echo $this->Form->input('naziv_zahtjeva');
		echo $this->Form->input('opis_zahtjeva');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ServiceRequest.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ServiceRequest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
	</ul>
</div>
