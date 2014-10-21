<div class="direktorijums form">
    <?php
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
        <legend><?php echo __('Kreirajte novi folder'); ?></legend>
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