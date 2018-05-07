<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salle'), ['action' => 'edit', $salle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salle'), ['action' => 'delete', $salle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salles view large-9 medium-8 columns content">
    <h3><?= h($salle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($salle->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombreplace') ?></th>
            <td><?= $this->Number->format($salle->nombreplace) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cours') ?></h4>
        <?php if (!empty($salle->cours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Salle Id') ?></th>
                <th scope="col"><?= __('Professeur Id') ?></th>
                <th scope="col"><?= __('Anneescolaire Id') ?></th>
                <th scope="col"><?= __('Classroom Id') ?></th>
                <th scope="col"><?= __('Matiere Id') ?></th>
                <th scope="col"><?= __('Jour') ?></th>
                <th scope="col"><?= __('Heuredebut') ?></th>
                <th scope="col"><?= __('Heurefin') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($salle->cours as $cours): ?>
            <tr>
                <td><?= h($cours->id) ?></td>
                <td><?= h($cours->salle_id) ?></td>
                <td><?= h($cours->professeur_id) ?></td>
                <td><?= h($cours->anneescolaire_id) ?></td>
                <td><?= h($cours->classroom_id) ?></td>
                <td><?= h($cours->matiere_id) ?></td>
                <td><?= h($cours->jour) ?></td>
                <td><?= h($cours->heuredebut) ?></td>
                <td><?= h($cours->heurefin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cours', 'action' => 'view', $cours->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cours', 'action' => 'edit', $cours->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cours', 'action' => 'delete', $cours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cours->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
