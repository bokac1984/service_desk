<?php if ($this->Session->read('Auth.User')): ?>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->Session->read('Auth.User.username') ?> <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Profile</a></li>
            <li class="divider"></li>
            <li><?php echo $this->Html->link('Odjavi se', array('controller' => 'users', 'action' => 'logout')); ?></li>
        </ul>
    </li>

<?php else: ?>
    <li><?php echo $this->Html->link('Prijavi se', array('controller' => 'users', 'action' => 'login')); ?></li>
<?php endif; ?>
