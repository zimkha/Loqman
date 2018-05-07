<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typeevaluation'), ['action' => 'edit', $typeevaluation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typeevaluation'), ['action' => 'delete', $typeevaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeevaluation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typeevaluation'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeevaluation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeevaluation view large-9 medium-8 columns content">
    <h3><?= h($typeevaluation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeevaluation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= $this->Number->format($typeevaluation->libelle) ?></td>
        </tr>
    </table>
</div>
