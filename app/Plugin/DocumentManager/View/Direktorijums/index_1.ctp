<?php if ($direktorijums): ?>
<div class="direktorijums index">
	<h2><?php echo __('Direktorijums'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($direktorijums as $direktorijum): ?>
	<tr>
		<td><?php echo h($direktorijum['Direktorijum']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($direktorijum['User']['username'], array('controller' => 'users', 'action' => 'view', $direktorijum['User']['id'])); ?>
		</td>
		<td><?php echo h($direktorijum['Direktorijum']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($direktorijum['ParentDirektorijum']['name'], array('controller' => 'direktorijums', 'action' => 'view', $direktorijum['ParentDirektorijum']['id'])); ?>
		</td>
		<td><?php echo h($direktorijum['Direktorijum']['created']); ?>&nbsp;</td>
		<td><?php echo h($direktorijum['Direktorijum']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $direktorijum['Direktorijum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $direktorijum['Direktorijum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $direktorijum['Direktorijum']['id']), array(), __('Are you sure you want to delete # %s?', $direktorijum['Direktorijum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Direktorijum'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direktorijums'), array('controller' => 'direktorijums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Direktorijum'), array('controller' => 'direktorijums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php else: ?>
<div class="row">
    <h2>Nemate podataka</h2>
    <?php echo $this->Html->link('Novi folder', array('prefix' => null, 'plugin' => 'document_manager', 'controller' => 'direktorijums', 'action' => 'add'), array('class' => 'btn btn-primary btn-lg')) ?>
</div>
<?php endif; ?>
