<?php //debug($serviceRequest); ?>
<div class="serviceRequests view row">
    <div class="col-lg-12">
    <h1><?php echo __('Detalji tiketa'); ?></h1>
    <table class="">
        <tr>
            <td>Šifra:&nbsp;</td>
            <td><?php echo h($serviceRequest['ServiceRequest']['id']); ?></td>
            <td>Prioritet:&nbsp;</td>
            <td>
                <?php echo $this->Html->link($serviceRequest['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $serviceRequest['Priority']['id'])); ?>
                <?php if (in_array($groupId, array('1', '3'))): ?>
                    <button class="btn btn-default btn-circle" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-list"></i>
                    </button>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Status:&nbsp;</td>
            <td><?php echo $this->Html->link($serviceRequest['Status']['naziv'], array('controller' => 'statuses', 'action' => 'view', $serviceRequest['Status']['id'])); ?></td>
            <td>Kreirao:&nbsp;</td>
            <td><?php echo $this->Html->link($serviceRequest['User']['username'], array('controller' => 'users', 'action' => 'view', $serviceRequest['User']['id'])); ?></td>  
        </tr>
        <tr>
            <td>Dodijeljen:&nbsp;</td>
            <td><?php echo $this->Html->link($serviceRequest['ServiceRequest']['assigned_to']['username'], array('controller' => 'users', 'action' => 'view', $serviceRequest['ServiceRequest']['assigned_to']['id'])); ?></td>
            <td>Kategorija:&nbsp;</td>
            <td><?php echo $this->Html->link($serviceRequest['Category']['naziv'], array('controller' => 'categories', 'action' => 'view', $serviceRequest['Category']['id'])); ?></td>  
        </tr>
        <tr>
            <td>
                <table class="">
                    <tr>
                        <td><?php echo h($serviceRequest['ServiceRequest']['naziv_zahtjeva']); ?></td>
                        <td><?php echo h($serviceRequest['ServiceRequest']['created']); ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo h($serviceRequest['ServiceRequest']['opis_zahtjeva']); ?> 
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <table class="table">
            <?php foreach ($serviceRequest['Message'] as $message): ?>
                <tr>
                    <td> 
                        <?php echo $message['user_id']; ?>
                    </td>
                    <td> 
                        <?php echo $message['message']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <?php
        echo $this->Form->create('ServiceRequest');
        echo $this->Form->input('id', array(
            'value' => $serviceRequest['ServiceRequest']['id'],
            'type' => 'hidden'
        ));
        echo $this->Form->input('Message.message', array(
            'type' => 'textarea',
            'label' => 'Poruka'
        ));
        echo $this->Form->button('Zatvori', array(
            'type' => 'submit',
            'id' => 'request-add',
            'class' => 'btn btn-large btn-block btn-primary col-lg-1'
        ));
        echo $this->Form->end();
        ?>
<!--	<h3><?php echo __('Actions'); ?></h3>
        <ul>
                <li><?php echo $this->Html->link(__('Edit Service Request'), array('action' => 'edit', $serviceRequest['ServiceRequest']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Service Request'), array('action' => 'delete', $serviceRequest['ServiceRequest']['id']), array(), __('Are you sure you want to delete # %s?', $serviceRequest['ServiceRequest']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('List Service Requests'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Service Request'), array('action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
        </ul>-->
    </div>
</div>
<?php
if (in_array($groupId, array('1', '3'))) {
    $id = $this->element('Modal\priorites', array(
        'id' => $serviceRequest['ServiceRequest']['id'],
        'selected' => $serviceRequest['Priority']['id']
    ));
    $body = <<<EOD
{$id}
EOD;

    echo $this->element('Modal\modal', array(
        'modalId' => 'myModal',
        'modalTitle' => 'Promjenite prioritet',
        'modalBody' => $body
    ));
}
