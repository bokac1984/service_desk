<?php
echo $this->Form->create('Document', array('type' => 'file'));
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

