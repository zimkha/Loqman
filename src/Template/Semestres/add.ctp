<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Semestres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="semestres form large-9 medium-8 columns content">
    <?= $this->Form->create($semestre) ?>
    <fieldset>
        <legend><?= __('Add Semestre') ?></legend>
        <?php
            echo $this->Form->input('anneescolaire_id', ['options' => $anneescolaires]);
            echo $this->Form->input('code');
            echo $this->Form->input('datedebut');
            echo $this->Form->input('phase');
            echo $this->Form->input('statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
