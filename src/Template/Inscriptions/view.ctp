<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inscription'), ['action' => 'edit', $inscription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inscription'), ['action' => 'delete', $inscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inscription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inscription'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eleves'), ['controller' => 'Eleves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Elef'), ['controller' => 'Eleves', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inscriptions view large-9 medium-8 columns content">
    <h3><?= h($inscription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Anneescolaire') ?></th>
            <td><?= $inscription->has('anneescolaire') ? $this->Html->link($inscription->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $inscription->anneescolaire->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classroom') ?></th>
            <td><?= $inscription->has('classroom') ? $this->Html->link($inscription->classroom->id, ['controller' => 'Classrooms', 'action' => 'view', $inscription->classroom->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Elef') ?></th>
            <td><?= $inscription->has('elef') ? $this->Html->link($inscription->elef->id, ['controller' => 'Eleves', 'action' => 'view', $inscription->elef->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inscription->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($inscription->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mensualite') ?></th>
            <td><?= $this->Number->format($inscription->mensualite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($inscription->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social') ?></th>
            <td><?= $inscription->social ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
