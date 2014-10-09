<div class="serviceRequestsHes form">
<?php echo $this->Form->create('ServiceRequestsH'); ?>
	<fieldset>
		<legend><?php echo __('Add Service Requests H'); ?></legend>
	<?php
		echo $this->Form->input('service_request_id');
		echo $this->Form->input('status_h');
		echo $this->Form->input('assigned_to');
		echo $this->Form->input('sekvenca');
		echo $this->Form->input('user_id');
		echo $this->Form->input('ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Requests Hes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('controller' => 'service_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Request'), array('controller' => 'service_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
