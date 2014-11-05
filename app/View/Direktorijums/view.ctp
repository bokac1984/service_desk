<?php
//debug($direktorijum); 

$this->Html->addCrumb('Folderi', array('controller' => 'direktorijums', 'action' => 'index'));
$this->Html->addCrumb($direktorijum['Direktorijum']['name']);
?>
<div class="row">
    <div class="col-lg-12">
        <h2><?php echo __($direktorijum['Direktorijum']['name']); ?></h2>
        <dl>
            <dd>
                <?php echo 'Sadržaj foldera'; ?>
                &nbsp;
            </dd>
        </dl>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php if (!empty($direktorijum['ChildDirektorijum'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-hover">
                <tr>
                    <th><?php echo __('Naziv'); ?></th>
                    <th><?php echo __('Kreiran'); ?></th>
                    <th><?php echo __('Modifikovan'); ?></th>
                    <th class="actions"><?php echo __('Akcije'); ?></th>
                </tr>
                <?php foreach ($direktorijum['ChildDirektorijum'] as $childDirektorijum): ?>
                    <tr>
                        <td>
                            <?php
                            if ($childDirektorijum['name'] === '...') {
                                if ($childDirektorijum['id'] === 0) {
                                    echo $this->Html->link(__('...'), array('controller' => 'direktorijums', 'action' => 'index'));
                                } else {
                                    echo $this->Html->link(__($childDirektorijum['name']), array('controller' => 'direktorijums', 'action' => 'view', $childDirektorijum['id']), array('escape' => false));
                                }
                            } else {
                                echo $this->Link->cLink(__($childDirektorijum['name']), array('controller' => 'direktorijums', 'action' => 'view', $childDirektorijum['id']), 'fa fa-folder-open fa-fw');
                            }
                            ?>
                        </td>
                        <td><?php echo $childDirektorijum['created']; ?></td>
                        <td><?php echo $childDirektorijum['modified']; ?></td>
                        <?php if (!empty($childDirektorijum['modified'])): ?>
                            <td class="actions">
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'direktorijums', 'action' => 'edit', $childDirektorijum['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'direktorijums', 'action' => 'delete', $childDirektorijum['id']), array(), __('Are you sure you want to delete # %s?', $childDirektorijum['id'])); ?>
                            </td>
                        <?php else: ?>
                            <td class="actions">&nbsp;</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                <?php if (!empty($direktorijum['Document'])): ?>
                    <?php foreach ($direktorijum['Document'] as $document): ?>
                        <tr>
                            <td><?php echo $this->Link->cLink(__($document['name']), array('controller' => 'documents', 'action' => 'view', $document['id']), 'fa fa-file-o fa-fw'); ?></td>
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
            </table>
        <?php endif; ?>

        <div class="actions">
            <?php echo $this->Html->link(__('Dodaj folder'), array('controller' => 'direktorijums', 'action' => 'add', $dirId), array('class' => 'btn btn-primary')); ?>
            <?php echo $this->Html->link(__('Dodaj fajl'), array('controller' => 'documents', 'action' => 'add', $dirId), array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
</div>
