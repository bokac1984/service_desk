<?php debug($direktorijums); ?>
<?php if ($direktorijums): ?>
<div class="direktorijums index">
<?php foreach ($direktorijums as $id => $folderName): ?>
    <?php echo $this->Html->link($folderName, array(
        'plugin' => 'document_manager',
        'controller' => 'direktorijums',
        'action' => 'view',
        $id
    )); ?>
<?php endforeach; ?>
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
