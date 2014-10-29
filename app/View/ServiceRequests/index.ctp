<?php
//debug($serviceRequests);  
if ($serviceRequests):
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h2><?php echo __('Lista tiketa'); ?></h2>
            <table cellpadding="0" cellspacing="0" class="table table-condensed">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id', 'Šifra'); ?></th>
                        <th><?php echo $this->Paginator->sort('status_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('category_id', 'Kategorija'); ?></th>
                        <th><?php echo $this->Paginator->sort('priority_id', 'Prioritet'); ?></th>
                        <th><?php echo $this->Paginator->sort('naziv_zahtjeva'); ?></th>
                        <th><?php echo $this->Paginator->sort('modified', 'Modifikovan'); ?></th>
                        <th class="actions"><?php echo __('Akcije'); ?></th>
                    </tr>
                </thead>
                <tbody>
    <?php foreach ($serviceRequests as $serviceRequest): ?>
                        <tr>
                            <td><?php echo h($serviceRequest['ServiceRequest']['id']); ?>&nbsp;</td>
                            <td>
        <?php echo $this->Html->link($serviceRequest['Status']['naziv'], array('controller' => 'statuses', 'action' => 'view', $serviceRequest['Status']['id'])); ?>
                            </td>
                            <td>
        <?php echo $this->Html->link($serviceRequest['Category']['naziv'], array('controller' => 'categories', 'action' => 'view', $serviceRequest['Category']['id'])); ?>
                            </td>
                            <td>
        <?php echo $this->Html->link($serviceRequest['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $serviceRequest['Priority']['id'])); ?>
                            </td>
                            <td><?php echo h($serviceRequest['ServiceRequest']['naziv_zahtjeva']); ?>&nbsp;</td>
                            <td><?php echo __($this->Time->niceShort($serviceRequest['ServiceRequest']['modified'])); ?>&nbsp;</td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $serviceRequest['ServiceRequest']['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $serviceRequest['ServiceRequest']['id'])); ?>
        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $serviceRequest['ServiceRequest']['id']), array(), __('Are you sure you want to delete # %s?', $serviceRequest['ServiceRequest']['id'])); ?>
                            </td>
                        </tr>
    <?php endforeach; ?>
                </tbody>
            </table>
            <p>
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>	</p>
            <div class="paging">
                <?php
                echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->numbers(array('separator' => ''));
                echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                ?>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="row">
        <h2><?php echo __('Nemate otvorenih tiketa'); ?></h2>
    <?php echo $this->Html->link(__('Novi tiket'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
    </div>
<?php endif; ?>
