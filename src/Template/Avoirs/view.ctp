<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avoir'), ['action' => 'edit', $avoir->classroom_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avoir'), ['action' => 'delete', $avoir->classroom_id], ['confirm' => __('Are you sure you want to delete # {0}?', $avoir->classroom_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avoirs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avoir'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matieres'), ['controller' => 'Matieres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matiere'), ['controller' => 'Matieres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avoirs view large-9 medium-8 columns content">
    <h3><?= h($avoir->classroom_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Classroom') ?></th>
            <td><?= $avoir->has('classroom') ? $this->Html->link($avoir->classroom->id, ['controller' => 'Classrooms', 'action' => 'view', $avoir->classroom->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matiere') ?></th>
            <td><?= $avoir->has('matiere') ? $this->Html->link($avoir->matiere->id, ['controller' => 'Matieres', 'action' => 'view', $avoir->matiere->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coeff') ?></th>
            <td><?= $this->Number->format($avoir->coeff) ?></td>
        </tr>
    </table>
</div>
