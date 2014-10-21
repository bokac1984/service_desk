<div class="direktorijums form">
    <?php
    echo $this->Form->create('Direktorijum');
    echo $this->Form->create('Direktorijum', array(
        'plugin' => 'document_manager',
        'controller' => 'direktorijums',
        'action' => 'add',
        'class' => 'form',
        'method' => 'post'
    ));
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
        <legend><?php echo __('Add Direktorijum'); ?></legend>
        <?php
        echo $this->Form->input('name', array(
            'label' => 'Naziv',
            'class' => 'form-control',
        ));
        echo $this->Form->button('Kreiraj folder', array(
            'type' => 'submit',
            'class' => 'btn margint20',
            'id' => 'create-folder'
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Direktorijums'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Direktorijums'), array('controller' => 'direktorijums', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Parent Direktorijum'), array('controller' => 'direktorijums', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
    </ul>
</div>
