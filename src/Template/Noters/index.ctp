<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="noters index large-9 medium-8 columns content">
    <h3><?= __('Noters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('eleve_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evaluation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($noters as $noter): ?>
            <tr>
                <td><?= $noter->has('elef') ? $this->Html->link($noter->elef->id, ['controller' => 'Eleves', 'action' => 'view', $noter->elef->id]) : '' ?></td>
                <td><?= $noter->has('evaluation') ? $this->Html->link($noter->evaluation->id, ['controller' => 'Evaluations', 'action' => 'view', $noter->evaluation->id]) : '' ?></td>
                <td><?= $this->Number->format($noter->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $noter->eleve_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $noter->eleve_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $noter->eleve_id], ['confirm' => __('Are you sure you want to delete # {0}?', $noter->eleve_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
