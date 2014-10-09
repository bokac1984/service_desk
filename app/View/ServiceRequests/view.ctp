<?php //debug($serviceRequest); ?>
<div class="serviceRequests view">
<h2><?php echo __('Service Request'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['Status']['naziv'], array('controller' => 'statuses', 'action' => 'view', $serviceRequest['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['User']['username'], array('controller' => 'users', 'action' => 'view', $serviceRequest['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['Category']['naziv'], array('controller' => 'categories', 'action' => 'view', $serviceRequest['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $serviceRequest['Priority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned To'); ?></dt>
		<dd>
                        <?php echo $this->Html->link($serviceRequest['ServiceRequest']['assigned_to']['username'], array('controller' => 'users', 'action' => 'view', $serviceRequest['ServiceRequest']['assigned_to']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Naziv Zahtjeva'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['naziv_zahtjeva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opis Zahtjeva'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['opis_zahtjeva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Request'), array('action' => 'edit', $serviceRequest['ServiceRequest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Request'), array('action' => 'delete', $serviceRequest['ServiceRequest']['id']), array(), __('Are you sure you want to delete # %s?', $serviceRequest['ServiceRequest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Request'), array('action' => 'add')); ?> </li>
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
