<div class="priorities view">
<h2><?php echo __('Priority'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Priority'), array('action' => 'edit', $priority['Priority']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Priority'), array('action' => 'delete', $priority['Priority']['id']), array(), __('Are you sure you want to delete # %s?', $priority['Priority']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('controller' => 'service_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Request'), array('controller' => 'service_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Service Requests'); ?></h3>
	<?php if (!empty($priority['ServiceRequest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Priority Id'); ?></th>
		<th><?php echo __('Assigned To'); ?></th>
		<th><?php echo __('Naziv Zahtjeva'); ?></th>
		<th><?php echo __('Opis Zahtjeva'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($priority['ServiceRequest'] as $serviceRequest): ?>
		<tr>
			<td><?php echo $serviceRequest['id']; ?></td>
			<td><?php echo $serviceRequest['status_id']; ?></td>
			<td><?php echo $serviceRequest['user_id']; ?></td>
			<td><?php echo $serviceRequest['category_id']; ?></td>
			<td><?php echo $serviceRequest['priority_id']; ?></td>
			<td><?php echo $serviceRequest['assigned_to']; ?></td>
			<td><?php echo $serviceRequest['naziv_zahtjeva']; ?></td>
			<td><?php echo $serviceRequest['opis_zahtjeva']; ?></td>
			<td><?php echo $serviceRequest['created']; ?></td>
			<td><?php echo $serviceRequest['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'service_requests', 'action' => 'view', $serviceRequest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'service_requests', 'action' => 'edit', $serviceRequest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'service_requests', 'action' => 'delete', $serviceRequest['id']), array(), __('Are you sure you want to delete # %s?', $serviceRequest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service Request'), array('controller' => 'service_requests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
