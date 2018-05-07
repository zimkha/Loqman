<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enseigner'), ['action' => 'edit', $enseigner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enseigner'), ['action' => 'delete', $enseigner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enseigner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enseigners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enseigner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Professeurs'), ['controller' => 'Professeurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professeur'), ['controller' => 'Professeurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matieres'), ['controller' => 'Matieres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matiere'), ['controller' => 'Matieres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enseigners view large-9 medium-8 columns content">
    <h3><?= h($enseigner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Anneescolaire') ?></th>
            <td><?= $enseigner->has('anneescolaire') ? $this->Html->link($enseigner->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $enseigner->anneescolaire->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Professeur') ?></th>
            <td><?= $enseigner->has('professeur') ? $this->Html->link($enseigner->professeur->id, ['controller' => 'Professeurs', 'action' => 'view', $enseigner->professeur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matiere') ?></th>
            <td><?= $enseigner->has('matiere') ? $this->Html->link($enseigner->matiere->id, ['controller' => 'Matieres', 'action' => 'view', $enseigner->matiere->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enseigner->id) ?></td>
        </tr>
    </table>
</div>
