<div class="serviceRequestsHes index">
	<h2><?php echo __('Service Requests Hes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_request_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_h'); ?></th>
			<th><?php echo $this->Paginator->sort('assigned_to'); ?></th>
			<th><?php echo $this->Paginator->sort('sekvenca'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($serviceRequestsHes as $serviceRequestsH): ?>
	<tr>
		<td><?php echo h($serviceRequestsH['ServiceRequestsH']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceRequestsH['ServiceRequest']['id'], array('controller' => 'service_requests', 'action' => 'view', $serviceRequestsH['ServiceRequest']['id'])); ?>
		</td>
		<td><?php echo h($serviceRequestsH['ServiceRequestsH']['status_h']); ?>&nbsp;</td>
		<td><?php echo h($serviceRequestsH['ServiceRequestsH']['assigned_to']); ?>&nbsp;</td>
		<td><?php echo h($serviceRequestsH['ServiceRequestsH']['sekvenca']); ?>&nbsp;</td>
		<td><?php echo h($serviceRequestsH['ServiceRequestsH']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceRequestsH['User']['id'], array('controller' => 'users', 'action' => 'view', $serviceRequestsH['User']['id'])); ?>
		</td>
		<td><?php echo h($serviceRequestsH['ServiceRequestsH']['ip']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $serviceRequestsH['ServiceRequestsH']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $serviceRequestsH['ServiceRequestsH']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $serviceRequestsH['ServiceRequestsH']['id']), array(), __('Are you sure you want to delete # %s?', $serviceRequestsH['ServiceRequestsH']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Service Requests H'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('controller' => 'service_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Request'), array('controller' => 'service_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
