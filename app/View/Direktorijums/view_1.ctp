<div class="direktorijums view">
<h2><?php echo __('Direktorijum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($direktorijum['Direktorijum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($direktorijum['User']['username'], array('controller' => 'users', 'action' => 'view', $direktorijum['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($direktorijum['Direktorijum']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Direktorijum'); ?></dt>
		<dd>
			<?php echo $this->Html->link($direktorijum['ParentDirektorijum']['name'], array('controller' => 'direktorijums', 'action' => 'view', $direktorijum['ParentDirektorijum']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($direktorijum['Direktorijum']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($direktorijum['Direktorijum']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($direktorijum['Direktorijum']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($direktorijum['Direktorijum']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="row">
    <?php echo $this->Form->create('Document', array('type' => 'file'));
            $this->Form->inputDefaults(array(
                'error' => array(
                        'attributes' => array(
                            'wrap' => 'div',
                            'class' => 'label label-warning'
                        )
                    ),
                    'div' => 'form-group'
            )
        );
    ?>
	<fieldset>
		<legend><?php echo __('Add Document'); ?></legend>
	<?php
        echo $this->Form->input('path', array(
            'type' => 'file', 
            'multiple' => 'multiple',
            'label' => 'Dodaj fajl (mozete odabrati koliko hocete)'
            )
        );
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Direktorijum'), array('action' => 'edit', $direktorijum['Direktorijum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Direktorijum'), array('action' => 'delete', $direktorijum['Direktorijum']['id']), array(), __('Are you sure you want to delete # %s?', $direktorijum['Direktorijum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Direktorijums'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direktorijum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direktorijums'), array('controller' => 'direktorijums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Direktorijum'), array('controller' => 'direktorijums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Direktorijums'); ?></h3>
	<?php if (!empty($direktorijum['ChildDirektorijum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($direktorijum['ChildDirektorijum'] as $childDirektorijum): ?>
		<tr>
			<td><?php echo $childDirektorijum['id']; ?></td>
			<td><?php echo $childDirektorijum['user_id']; ?></td>
			<td><?php echo $childDirektorijum['name']; ?></td>
			<td><?php echo $childDirektorijum['parent_id']; ?></td>
			<td><?php echo $childDirektorijum['lft']; ?></td>
			<td><?php echo $childDirektorijum['rght']; ?></td>
			<td><?php echo $childDirektorijum['created']; ?></td>
			<td><?php echo $childDirektorijum['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'direktorijums', 'action' => 'view', $childDirektorijum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'direktorijums', 'action' => 'edit', $childDirektorijum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'direktorijums', 'action' => 'delete', $childDirektorijum['id']), array(), __('Are you sure you want to delete # %s?', $childDirektorijum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Direktorijum'), array('controller' => 'direktorijums', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Documents'); ?></h3>
	<?php if (!empty($direktorijum['Document'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($direktorijum['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id']; ?></td>
			<td><?php echo $document['name']; ?></td>
			<td><?php echo $document['size']; ?></td>
			<td><?php echo $document['created']; ?></td>
			<td><?php echo $document['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), array(), __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
