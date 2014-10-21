<div class="documents form">
    <?php
    echo $this->Form->create('Document', array(
        'plugin' => null,
        'controller' => 'documents',
        'action' => 'add',
        'class' => 'form',
        'method' => 'post',
        'type' => 'file'
    ));
    $this->Form->inputDefaults(array(
        'error' => array(
            'attributes' => array(
                'wrap' => 'div',
                'class' => 'label label-warning'
            )
        ),
        'div' => 'form-group'
    ));
    ?>
    <fieldset>
        <legend><?php echo __('Add Document'); ?></legend>
        <?php
        echo $this->Form->input('path.', array('type' => 'file', 'multiple'));
        echo $this->Form->button('Upload', array(
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

        <li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Direktorijums'), array('controller' => 'direktorijums', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Direktorijum'), array('controller' => 'direktorijums', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
