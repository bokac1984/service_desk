<div class="solvers view">
<h2><?php echo __('Solver'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($solver['Solver']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solver['Category']['naziv'], array('controller' => 'categories', 'action' => 'view', $solver['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solver['User']['id'], array('controller' => 'users', 'action' => 'view', $solver['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($solver['Solver']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($solver['Solver']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solver'), array('action' => 'edit', $solver['Solver']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solver'), array('action' => 'delete', $solver['Solver']['id']), array(), __('Are you sure you want to delete # %s?', $solver['Solver']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solvers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solver'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
