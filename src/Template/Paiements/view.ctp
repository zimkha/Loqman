<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paiement'), ['action' => 'edit', $paiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paiement'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eleves'), ['controller' => 'Eleves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Elef'), ['controller' => 'Eleves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paiements view large-9 medium-8 columns content">
    <h3><?= h($paiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Elef') ?></th>
            <td><?= $paiement->has('elef') ? $this->Html->link($paiement->elef->id, ['controller' => 'Eleves', 'action' => 'view', $paiement->elef->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anneescolaire') ?></th>
            <td><?= $paiement->has('anneescolaire') ? $this->Html->link($paiement->anneescolaire->id, ['controller' => 'Anneescolaires', 'action' => 'view', $paiement->anneescolaire->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($paiement->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mois') ?></th>
            <td><?= $this->Number->format($paiement->mois) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($paiement->date) ?></td>
        </tr>
    </table>
</div>
