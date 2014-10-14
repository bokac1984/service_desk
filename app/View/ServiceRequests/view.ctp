<?php //debug($serviceRequest); ?>
<div class="serviceRequests view">
<h2><?php echo __('Service Request'); ?></h2>
<table>
    <tr>
        <td>Šifra:&nbsp;</td>
        <td><?php echo h($serviceRequest['ServiceRequest']['id']); ?></td>
        <td>Prioritet:&nbsp;</td>
        <td><?php echo $this->Html->link($serviceRequest['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $serviceRequest['Priority']['id'])); ?></td>  
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
            <table>
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
	<dl>
		<dt><?php echo __('Šifra'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['Status']['naziv'], array('controller' => 'statuses', 'action' => 'view', $serviceRequest['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kreirao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['User']['username'], array('controller' => 'users', 'action' => 'view', $serviceRequest['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kategorija'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['Category']['naziv'], array('controller' => 'categories', 'action' => 'view', $serviceRequest['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prioritet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceRequest['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $serviceRequest['Priority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dodijeljen'); ?></dt>
		<dd>
                        <?php echo $this->Html->link($serviceRequest['ServiceRequest']['assigned_to']['username'], array('controller' => 'users', 'action' => 'view', $serviceRequest['ServiceRequest']['assigned_to']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Naziv Zahtjeva'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['naziv_zahtjeva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opis Zahtjeva'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['opis_zahtjeva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kreiran'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifikovan'); ?></dt>
		<dd>
			<?php echo h($serviceRequest['ServiceRequest']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
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
	</ul>
</div>
