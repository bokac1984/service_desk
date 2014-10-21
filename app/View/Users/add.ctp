<div class="users form">
    <?php
    echo $this->Form->create('User', array(
        'plugin' => null,
        'controller' => 'users',
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
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('group_id', array(
                    'label' => 'Grupa',
                    'class' => 'form-control',
                ));
		echo $this->Form->input('username', array(
                    'label' => 'Korisničko ime',
                    'class' => 'form-control',
                ));
		echo $this->Form->input('password', array(
                    'label' => 'Šifra',
                    'class' => 'form-control',
                ));
                echo $this->Form->button('Kreiraj korisnika', array(
                    'type' => 'submit',
                    'class' => 'btn margint20',
                    'id' => 'create-folder'
                ));
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
