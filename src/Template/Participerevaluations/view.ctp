<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Participerevaluation'), ['action' => 'edit', $participerevaluation->evaluation_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Participerevaluation'), ['action' => 'delete', $participerevaluation->evaluation_id], ['confirm' => __('Are you sure you want to delete # {0}?', $participerevaluation->evaluation_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Participerevaluations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participerevaluation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="participerevaluations view large-9 medium-8 columns content">
    <h3><?= h($participerevaluation->evaluation_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Evaluation') ?></th>
            <td><?= $participerevaluation->has('evaluation') ? $this->Html->link($participerevaluation->evaluation->id, ['controller' => 'Evaluations', 'action' => 'view', $participerevaluation->evaluation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classe Id') ?></th>
            <td><?= $this->Number->format($participerevaluation->classe_id) ?></td>
        </tr>
    </table>
</div>
