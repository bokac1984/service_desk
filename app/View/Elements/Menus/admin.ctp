<?php ?>
<ul class="nav" id="side-menu">
    <li class="sidebar-search">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
        </div>
        <!-- /input-group -->
    </li>
    <li>
        <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Servisi<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <?php echo $this->Link->cLink('Novi', array('controller' => 'service_requests', 'action' => 'add'), 'fa fa-table fa-fw'); ?>
            </li>
            <li>
                <?php echo $this->Link->cLink('Lista', array('controller' => 'service_requests', 'action' => 'index'), 'fa fa-table fa-fw'); ?>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Korisnici<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <?php echo $this->Link->cLink('Novi', array('prefix' => null, 'plugin' => null, 'controller' => 'users', 'action' => 'add'), 'fa fa-table fa-fw'); ?>
            </li>
            <li>
                <?php echo $this->Link->cLink('Lista', array('prefix' => null, 'plugin' => null, 'controller' => 'users', 'action' => 'index'), 'fa fa-table fa-fw'); ?>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-edit fa-fw"></i> Dokumenti<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <?php echo $this->Link->cLink('Novi', array('prefix' => null, 'plugin' => null, 'controller' => 'direktorijums', 'action' => 'add'), 'fa fa-table fa-fw'); ?>
            </li>
            <li>
                <?php echo $this->Link->cLink('Lista', array('prefix' => null, 'plugin' => null, 'controller' => 'direktorijums', 'action' => 'index'), 'fa fa-table fa-fw'); ?>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>