<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="niveaus index large-9 medium-8 columns content">
    <h3><?= __('Niveaus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelle') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveaus as $niveau): ?>
            <tr>
                <td><?= h($niveau->code) ?></td>
                <td><?= h($niveau->libelle) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $niveau->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $niveau->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $niveau->id], ['confirm' => __('Are you sure you want to delete # {0}?', $niveau->id)]) ?>
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
