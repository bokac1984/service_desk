<?php //debug($children); ?>
<h3>Otvori novi tiket</h3>
<div class="row">
    <div class="col-sm-6">
        <?php
        echo $this->Form->create('ServiceRequest');
        echo $this->Form->input('parent_category', array(
            'empty' => array('' => 'Odaberi kategoriju'),
            'options' => $categories,
            'class' => 'form-control',
            'label' => 'Kategorija'
        ));
        echo $this->Form->input('children_category', array(
            'empty' => array('' => 'Odaberi podkategoriju'),
            'options' => $children,
            'class' => 'form-control',
            'label' => 'Podkategorija'
        ));
        echo $this->Form->input('type', array(
            'empty' => array('' => 'Odaberi tip'),
            'options' => $type,
            'class' => 'form-control',
            'label' => 'Tip'
        ));
        echo $this->Form->input('priority_id', array(
            'class' => 'form-control',
        ));
        echo $this->Form->input('naziv_zahtjeva', array(
            'class' => 'form-control',
        ));
        echo $this->Form->input('opis_zahtjeva', array(
            'type' => 'textarea',
            'class' => 'form-control',
        ));
        echo $this->Form->button('Otvori', array(
            'type' => 'submit',
            'id' => 'request-add',
            'class' => 'btn btn-large btn-block btn-primary'
        ));
        echo $this->Form->end();
        ?>
</div>
    </div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Requests'), array('action' => 'index')); ?></li>
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
