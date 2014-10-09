<?php
    echo $this->Form->create('User', array(
        'plugin' => null,
        'controller' => 'users',
        'action' => 'login',
        'class' => 'form-signin',
        'method' => 'post'
    ));
    echo '<h2 class="form-signin-heading">Prijavite se</h2>';
    echo $this->Form->input('username', array(
        'class' => 'form-control',
        'placeholder' => 'Korisničko ime',
        'label' => false
    ));
    echo $this->Form->input('password', array(
        'class' => 'form-control',
        'placeholder' => 'Šifra',
        'label' => false
    ));
    echo $this->Form->input('rememberme', array(
        'after' => '</label>',
        'before' => '<label class="checkbox">',
        'between' => 'Zapamti me',
        'type' => 'checkbox',
        'div' => false,
        'label' => false
    ));

    echo $this->Form->button('Prijavi me', array('type' => 'submit', 'class' => 'btn btn-large btn-block btn-primary'));
    echo $this->Form->end();
?>
