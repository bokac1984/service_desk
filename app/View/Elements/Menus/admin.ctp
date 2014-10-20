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
        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
        <?php echo $this->Link->cLink('Servisi', array('controller' => 'service_requests', 'action' => 'index'), 'fa fa-table fa-fw'); ?>
    </li>
    <li>
        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-edit fa-fw"></i> Dokumenti<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <?php echo $this->Link->cLink('Novi', array('prefix' => null, 'plugin' => 'document_manager', 'controller' => 'direktorijums', 'action' => 'add'), 'fa fa-table fa-fw'); ?>
            </li>
            <li>
                <?php echo $this->Link->cLink('Lista', array('prefix' => null, 'plugin' => 'document_manager', 'controller' => 'direktorijums', 'action' => 'index'), 'fa fa-table fa-fw'); ?>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="panels-wells.html">Panels and Wells</a>
            </li>
            <li>
                <a href="buttons.html">Buttons</a>
            </li>
            <li>
                <a href="notifications.html">Notifications</a>
            </li>
            <li>
                <a href="typography.html">Typography</a>
            </li>
            <li>
                <a href="grid.html">Grid</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Third Level <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                </ul>
                <!-- /.nav-third-level -->
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li class="active">
        <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a class="active" href="blank.html">Blank Page</a>
            </li>
            <li>
                <a href="login.html">Login Page</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
</ul>

