<?php
if (!$this->Session->read('Auth.User.group_id')) {
    echo $this->Html->link('Prijavi se', array('controller' => 'users', 'action' => 'login'));
}
?>
<div class="center-image">
    <h3>Under Construction</h3>
    <?php
    echo $this->Html->image('service_desk.jpg', array('alt' => 'Under Construction'));
    ?>
</div>