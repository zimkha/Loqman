<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="matieres view large-9 medium-8 columns content">
    <h3> CODE   : <?= h($matiere->code) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($matiere->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($matiere->libelle) ?></td>
        </tr>
        <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Matiere'), ['action' => 'edit', $matiere->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Matiere'), ['action' => 'delete', $matiere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matiere->id)]) ?> </li>
        
    </ul>
    </table>
   
   
   
