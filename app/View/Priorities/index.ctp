<div class="priorities index">
	<h2><?php echo __('Priorities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($priorities as $priority): ?>
	<tr>
		<td><?php echo h($priority['Priority']['id']); ?>&nbsp;</td>
		<td><?php echo h($priority['Priority']['name']); ?>&nbsp;</td>
		<td><?php echo h($priority['Priority']['description']); ?>&nbsp;</td>
		<td><?php echo h($priority['Priority']['created']); ?>&nbsp;</td>
		<td><?php echo h($priority['Priority']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $priority['Priority']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $priority['Priority']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $priority['Priority']['id']), array(), __('Are you sure you want to delete # %s?', $priority['Priority']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Priority'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('controller' => 'service_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Request'), array('controller' => 'service_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
