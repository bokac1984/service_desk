<?php if ($direktorijums): ?>
    <div class="direktorijums index">
        <h2><?php echo __('Lista korisnickih foldera'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table table-hover">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('name', 'Naziv'); ?></th>
                    <th><?php echo $this->Paginator->sort('created', 'Kreiran'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified', 'Modifikovan'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($direktorijums as $direktorijum): ?>
                    <tr>
                        <td><?php echo $this->Html->link(__($direktorijum['Direktorijum']['name']), array('action' => 'view', $direktorijum['Direktorijum']['id'])); ?>&nbsp;</td>
                        <td><?php echo h($direktorijum['Direktorijum']['created']); ?>&nbsp;</td>
                        <td><?php echo h($direktorijum['Direktorijum']['modified']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $direktorijum['Direktorijum']['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $direktorijum['Direktorijum']['id']), array(), __('Are you sure you want to delete # %s?', $direktorijum['Direktorijum']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="actions">
        <?php echo $this->Html->link(__('Novi folder'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Nemate podataka</h2>
        <?php echo $this->Html->link('Novi folder', array('prefix' => null, 'plugin' => null, 'controller' => 'direktorijums', 'action' => 'add'), array('class' => 'btn btn-primary btn-lg')) ?>
    </div>
<?php endif; ?>
