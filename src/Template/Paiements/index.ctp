<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="paiements index large-9 medium-8 columns content">
    <h3><?= __('Paiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('eleve_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anneescolaire_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mois') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paiements as $paiement): ?>
            <tr>
                <td><?= $paiement->has('elef') ? $this->Html->link($paiement->elef->id, ['controller' => 'Eleves', 'action' => 'view', $paiement->elef->id]) : '' ?></td>
                <td><?= $paiement->has('anneescolaire') ? $this->Html->link($paiement->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $paiement->anneescolaire->id]) : '' ?></td>
                <td><?= h($paiement->date) ?></td>
                <td><?= h($paiement->code) ?></td>
                <td><?= $this->Number->format($paiement->mois) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?>
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
