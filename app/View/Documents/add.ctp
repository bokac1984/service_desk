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
        <legend><?php echo __('Dodaj novi fajl'); ?></legend>
        <?php
        echo $this->Form->input('Direktorijum', array('type' => 'hidden', 'value' => $dirId));
        echo $this->Form->input('User', array('type' => 'hidden', 'value' => $user_id));
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
