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
<?php else: ?>
<div class="row">
    <h2>Nemate podataka</h2>
    <?php echo $this->Html->link('Novi folder', array('prefix' => null, 'plugin' => 'document_manager', 'controller' => 'direktorijums', 'action' => 'add'), array('class' => 'btn btn-primary btn-lg')) ?>
</div>
<?php endif; ?>
