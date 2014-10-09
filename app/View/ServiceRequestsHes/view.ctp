<div class="serviceRequestsHes view">
<h2><?php echo __('Service Requests H'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceRequestsH['ServiceRequestsH']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Request'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequestsH['ServiceRequest']['id'], array('controller' => 'service_requests', 'action' => 'view', $serviceRequestsH['ServiceRequest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status H'); ?></dt>
		<dd>
			<?php echo h($serviceRequestsH['ServiceRequestsH']['status_h']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned To'); ?></dt>
		<dd>
			<?php echo h($serviceRequestsH['ServiceRequestsH']['assigned_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sekvenca'); ?></dt>
		<dd>
			<?php echo h($serviceRequestsH['ServiceRequestsH']['sekvenca']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($serviceRequestsH['ServiceRequestsH']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequestsH['User']['id'], array('controller' => 'users', 'action' => 'view', $serviceRequestsH['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($serviceRequestsH['ServiceRequestsH']['ip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Requests H'), array('action' => 'edit', $serviceRequestsH['ServiceRequestsH']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Requests H'), array('action' => 'delete', $serviceRequestsH['ServiceRequestsH']['id']), array(), __('Are you sure you want to delete # %s?', $serviceRequestsH['ServiceRequestsH']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Requests Hes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Requests H'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('controller' => 'service_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Request'), array('controller' => 'service_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
