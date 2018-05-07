<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="professeurs index large-9 medium-8 columns content">
    <h3><?= __('Professeurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('matricule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($professeurs as $professeur): ?>
            <tr>
                <td><?= h($professeur->matricule) ?></td>
                <td><?= h($professeur->nom) ?></td>
                <td><?= h($professeur->prenom) ?></td>
                <td><?= h($professeur->adresse) ?></td>
                <td><?= h($professeur->telephone) ?></td>
                <td><?= h($professeur->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $professeur->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $professeur->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $professeur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professeur->id)]) ?>
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
