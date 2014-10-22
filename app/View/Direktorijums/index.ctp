<?php debug($direktorijums); ?>
<?php if ($direktorijums): ?>
    <div class="direktorijums index">
        <h2><?php echo __('Lista korisnickih foldera'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table table-hover">
            <thead>
                <tr>
                <th><?php echo __('Naziv'); ?></th>
                <th><?php echo __('Kreiran'); ?></th>
                <th><?php echo __('Modifikovan'); ?></th>
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
            <?php if (!empty($direktorijum['ParentDirektorijum']['Document'])): ?>
                <?php foreach ($direktorijum['ParentDirektorijum']['Document'] as $document): ?>
                    <tr>
                        <td><?php echo $this->Html->link(__($document['name']), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?></td>
                        <td><?php echo $document['created']; ?></td>
                        <td><?php echo $document['modified']; ?></td>
                        <td class="actions">
                            
                            <?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
                            <?php if ($groupId == 1): ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), array(), __('Are you sure you want to delete # %s?', $document['id'])); ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="actions">
        <?php echo $this->Html->link(__('Novi folder'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Html->link(__('Dodaj fajl'), array('controller' => 'documents', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
    </div>
<?php else: ?>
    <div class="row">
        <h2>Nemate podataka</h2>
        <?php echo $this->Html->link('Novi folder', array('prefix' => null, 'plugin' => null, 'controller' => 'direktorijums', 'action' => 'add'), array('class' => 'btn btn-primary btn-lg')) ?>
        <?php echo $this->Html->link(__('Dodaj fajl'), array('controller' => 'documents', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
    </div>
<?php endif; ?>
