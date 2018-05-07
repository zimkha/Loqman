<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Noter'), ['action' => 'edit', $noter->eleve_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Noter'), ['action' => 'delete', $noter->eleve_id], ['confirm' => __('Are you sure you want to delete # {0}?', $noter->eleve_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Noters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eleves'), ['controller' => 'Eleves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Elef'), ['controller' => 'Eleves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="noters view large-9 medium-8 columns content">
    <h3><?= h($noter->eleve_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Elef') ?></th>
            <td><?= $noter->has('elef') ? $this->Html->link($noter->elef->id, ['controller' => 'Eleves', 'action' => 'view', $noter->elef->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evaluation') ?></th>
            <td><?= $noter->has('evaluation') ? $this->Html->link($noter->evaluation->id, ['controller' => 'Evaluations', 'action' => 'view', $noter->evaluation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= $this->Number->format($noter->note) ?></td>
        </tr>
    </table>
</div>
