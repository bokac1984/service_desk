<?php

$p = $this->requestAction(
        'service_requests/prioriteti'
);
echo $this->Form->create('ServiceRequest', array(
    'plugin' => null,
    'controller' => 'service_reqiests',
    'action' => 'update',
    'class' => 'form',
    'method' => 'post'
));
echo $this->Form->input('id' , array('value' => $id));
echo $this->Form->input('priority_id', array(
    'class' => 'form-control',
    'options' => $p,
    'selected' => $selected
));
echo $this->Form->button('Spasi', array(
    'type' => 'submit',
    'id' => 'request-add',
    'class' => 'btn btn-large btn-block btn-primary',
    'style' => 'margin-top: 10px'
));
echo $this->Form->end();
?>