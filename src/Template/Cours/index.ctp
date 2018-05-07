<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="cours index large-9 medium-8 columns content">
    <h3><?= __('Cours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('salle_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('professeur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anneescolaire_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classroom_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matiere_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heuredebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heurefin') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cours as $cour): ?>
            <tr>
                <td><?= $this->Number->($cour->id) ?></td>
                <td><?= $cour->has('salle') ? $this->Html->link($cour->salle->id, ['controller' => 'Salles', 'action' => 'view', $cour->salle->id]) : '' ?></td>
                <td><?= $cour->has('professeur') ? $this->Html->link($cour->professeur->id, ['controller' => 'Professeurs', 'action' => 'view', $cour->professeur->id]) : '' ?></td>
                <td><?= $cour->has('anneescolaire') ? $this->Html->link($cour->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $cour->anneescolaire->id]) : '' ?></td>
                <td><?= $cour->has('classroom') ? $this->Html->link($cour->classroom->id, ['controller' => 'Classrooms', 'action' => 'view', $cour->classroom->id]) : '' ?></td>
                <td><?= $cour->has('matiere') ? $this->Html->link($cour->matiere->id, ['controller' => 'Matieres', 'action' => 'view', $cour->matiere->id]) : '' ?></td>
                <td><?= h($cour->jour) ?></td>
                <td><?= h($cour->heuredebut) ?></td>
                <td><?= h($cour->heurefin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cour->id)]) ?>
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
