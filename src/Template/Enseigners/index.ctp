<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="enseigners index large-9 medium-8 columns content">
    <h3><?= __('Enseigners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('anneescolaire_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('professeur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matiere_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enseigners as $enseigner): ?>
            <tr>
                <td><?= $enseigner->has('anneescolaire') ? $this->Html->link($enseigner->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $enseigner->anneescolaire->id]) : '' ?></td>
                <td><?= $enseigner->has('professeur') ? $this->Html->link($enseigner->professeur->id, ['controller' => 'Professeurs', 'action' => 'view', $enseigner->professeur->id]) : '' ?></td>
                <td><?= $enseigner->has('matiere') ? $this->Html->link($enseigner->matiere->id, ['controller' => 'Matieres', 'action' => 'view', $enseigner->matiere->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enseigner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enseigner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enseigner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enseigner->id)]) ?>
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
