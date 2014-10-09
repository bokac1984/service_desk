<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('parent_id', array('options' => $parents, 'empty' => '-'));
		echo $this->Form->input('naziv');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Service Requests'), array('controller' => 'service_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Request'), array('controller' => 'service_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solvers'), array('controller' => 'solvers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solver'), array('controller' => 'solvers', 'action' => 'add')); ?> </li>
	</ul>
</div>
