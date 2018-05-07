<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enseigners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Professeurs'), ['controller' => 'Professeurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Professeur'), ['controller' => 'Professeurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matieres'), ['controller' => 'Matieres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matiere'), ['controller' => 'Matieres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enseigners form large-9 medium-8 columns content">
    <?= $this->Form->create($enseigner) ?>
    <fieldset>
        <legend><?= __('Add Enseigner') ?></legend>
        <?php
            echo $this->Form->input('anneescolaire_id', ['options' => $anneescolaires]);
            echo $this->Form->input('professeur_id', ['options' => $professeurs]);
            echo $this->Form->input('matiere_id', ['options' => $matieres]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
