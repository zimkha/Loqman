<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="semestres index large-9 medium-8 columns content">
    <h3><?= __('Semestres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('anneescolaire_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statut') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($semestres as $semestre): ?>
            <tr>
                <td><?= $semestre->has('anneescolaire') ? $this->Html->link($semestre->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $semestre->anneescolaire->id]) : '' ?></td>
                <td><?= h($semestre->code) ?></td>
                <td><?= h($semestre->datedebut) ?></td>
                <td><?= h($semestre->phase) ?></td>
                <td><?= h($semestre->statut) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $semestre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $semestre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $semestre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semestre->id)]) ?>
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
