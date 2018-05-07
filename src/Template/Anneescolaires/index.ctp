<?php
/**
  * @var \App\View\AppView $this
  */
?><div class="anneescolaires index large-9 medium-8 columns content">
    <h3><?= __('Anneescolaires') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statut') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anneescolaires as $anneescolaire): ?>
            <tr>
                <td><?= h($anneescolaire->code) ?></td>
                <td><?= h($anneescolaire->datedebut) ?></td>
                <td><?= h($anneescolaire->statut) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $anneescolaire->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anneescolaire->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $anneescolaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anneescolaire->id)]) ?>
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
