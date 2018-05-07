<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Semestre'), ['action' => 'edit', $semestre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Semestre'), ['action' => 'delete', $semestre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semestre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Semestres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Semestre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="semestres view large-9 medium-8 columns content">
    <h3><?= h($semestre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Anneescolaire') ?></th>
            <td><?= $semestre->has('anneescolaire') ? $this->Html->link($semestre->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $semestre->anneescolaire->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($semestre->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phase') ?></th>
            <td><?= h($semestre->phase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($semestre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedebut') ?></th>
            <td><?= h($semestre->datedebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statut') ?></th>
            <td><?= $semestre->statut ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Evaluations') ?></h4>
        <?php if (!empty($semestre->evaluations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Semestre Id') ?></th>
                <th scope="col"><?= __('Matiere Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Heuredebut') ?></th>
                <th scope="col"><?= __('Heurefin') ?></th>
                <th scope="col"><?= __('Statut') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($semestre->evaluations as $evaluations): ?>
            <tr>
                <td><?= h($evaluations->id) ?></td>
                <td><?= h($evaluations->semestre_id) ?></td>
                <td><?= h($evaluations->matiere_id) ?></td>
                <td><?= h($evaluations->code) ?></td>
                <td><?= h($evaluations->date) ?></td>
                <td><?= h($evaluations->heuredebut) ?></td>
                <td><?= h($evaluations->heurefin) ?></td>
                <td><?= h($evaluations->statut) ?></td>
                <td><?= h($evaluations->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evaluations', 'action' => 'view', $evaluations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evaluations', 'action' => 'edit', $evaluations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evaluations', 'action' => 'delete', $evaluations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
