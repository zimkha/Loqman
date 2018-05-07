<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cour'), ['action' => 'edit', $cour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cour'), ['action' => 'delete', $cour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salles'), ['controller' => 'Salles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salle'), ['controller' => 'Salles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Professeurs'), ['controller' => 'Professeurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professeur'), ['controller' => 'Professeurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matieres'), ['controller' => 'Matieres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matiere'), ['controller' => 'Matieres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cours view large-9 medium-8 columns content">
    <h3><?= h($cour->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Salle') ?></th>
            <td><?= $cour->has('salle') ? $this->Html->link($cour->salle->id, ['controller' => 'Salles', 'action' => 'view', $cour->salle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Professeur') ?></th>
            <td><?= $cour->has('professeur') ? $this->Html->link($cour->professeur->id, ['controller' => 'Professeurs', 'action' => 'view', $cour->professeur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anneescolaire') ?></th>
            <td><?= $cour->has('anneescolaire') ? $this->Html->link($cour->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $cour->anneescolaire->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classroom') ?></th>
            <td><?= $cour->has('classroom') ? $this->Html->link($cour->classroom->id, ['controller' => 'Classrooms', 'action' => 'view', $cour->classroom->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matiere') ?></th>
            <td><?= $cour->has('matiere') ? $this->Html->link($cour->matiere->id, ['controller' => 'Matieres', 'action' => 'view', $cour->matiere->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jour') ?></th>
            <td><?= h($cour->jour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Heuredebut') ?></th>
            <td><?= h($cour->heuredebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Heurefin') ?></th>
            <td><?= h($cour->heurefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cour->id) ?></td>
        </tr>
    </table>
</div>
