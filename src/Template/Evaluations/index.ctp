<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="evaluations index large-9 medium-8 columns content">
    <h3><?= __('Evaluations') ?></h3>
    <?= $this->Form->create() ?>
    <div class="large-3 medium-3 columns">
        <?= $this->Form->input('semestre', ['options' => [1 => 'Semestre 1', 2 => 'Semestre 2'], 'label' => 'Semestre', 'empty' => '- - - Selectionner  SVP - - -']); ?>
    </div>
    <div class="large-3 medium-3 columns">
        <?= $this->Form->input('classe', ['options' => $classes, 'label' => 'Classe', 'empty' => '- - - Selectionner SVP - - -']); ?>
    </div>
    <div class="large-3 medium-3 columns">
        <?= $this->Form->input('type', ['options' => $typeevaluations, 'label' => 'Type', 'empty' => '- - - Selectionner SVP - - -']); ?>
    </div>
    <div class="large-3 medium-3 columns">
        <?= $this->Form->button('rechercher', ['class' => 'button button-sm button-info']); ?>
    </div>
    <?= $this->Form->end() ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('semestre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matiere_id') ?></th>

                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heuredebut', 'Debut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heurefin', 'Fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeevaluation_id', 'Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evaluations as $evaluation): ?>
                <tr>

                    <td><?= $evaluation->has('semestre') ? $this->Html->link($evaluation->semestre->code, ['controller' => 'Semestres', 'action' => 'view', $evaluation->semestre->id]) : '' ?></td>
                    <td><?= $evaluation->has('matiere') ? $this->Html->link($evaluation->matiere->code, ['controller' => 'Matieres', 'action' => 'view', $evaluation->matiere->id]) : '' ?></td>         
                    <td><?= h($evaluation->date) ?></td>
                    <td><?= h($evaluation->heuredebut . ' H') ?></td>
                    <td><?= h($evaluation->heurefin. ' H') ?></td>
                    <td><?= h($evaluation->statut) ?></td>
                    <td><?= $evaluation->has('typeevaluation') ? $this->Html->link($evaluation->typeevaluation->libelle, ['controller' => 'Typeevaluations', 'action' => 'view', $evaluation->typeevaluation->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Voir'), ['action' => 'view', $evaluation->id]) ?>
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
