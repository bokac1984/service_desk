<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Service desk</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Muehlbauer, Bojan M.">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('dashboard');
                echo $this->Html->css('custom');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo $this->Html->link(Configure::read('Site.name'), array('controller' => 'pages', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dokumenti <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><?php echo $this->Html->link('Dodaj dokument', array('prefix' => null, 'plugin' => 'document_manager', 'controller' => 'direktorijums', 'action' => 'add')); ?></li>
                                <li class="divider"></li>
                                <li><?php echo $this->Html->link('Pregled', array('prefix' => null, 'plugin' => 'document_manager', 'controller' => 'direktorijums', 'action' => 'index')); ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service desk <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><?php echo $this->Html->link('Otvori tiket', array('prefix' => null, 'plugin' => null,'controller' => 'service_requests', 'action' => 'add')); ?></li>
                                <li class="divider"></li>
                                <li><?php echo $this->Html->link('Pregled', array('prefix' => null, 'plugin' => null, 'controller' => 'service_requests', 'action' => 'index')); ?></li>
                            </ul>
                        </li>
                        <?php echo $this->element('login-part') ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Session->flash('auth'); ?>
            <?php echo $this->fetch('content'); ?>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <?php
            echo $this->Html->script('/js/lib/jquery.min');
            echo $this->Html->script('/js/lib/bootstrap.min');
            echo $this->Html->script('/js/scripts');
            echo $this->fetch('scriptBottom');
        ?>
    </body>
</html>