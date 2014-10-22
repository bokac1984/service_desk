<div class="documents form">
    <?php
    echo $this->Form->create('Document', array(
        'plugin' => null,
        'controller' => 'documents',
        'action' => 'edit',
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
        'div' => 'form-group col-lg-3'
            )
    );
    ?>
    <fieldset>
        <legend><?php echo __('Dodijeli korisnicima'); ?></legend>
        <?php
        echo $this->Form->input('id', array(
            'type' => 'hidden',
        ));
        echo $this->Form->input('User', array(
            'label' => 'Korisnici',
            'class' => 'form-control',
            'size' => 15,
        ));
		
       /* echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('size');
		echo $this->Form->input('Direktorijum');
		echo $this->Form->input('User');*/
        echo $this->Form->button('Spasi promjene', array(
            'type' => 'submit',
            'class' => 'btn margint20',
            'id' => 'create-folder'
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
