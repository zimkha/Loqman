<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Salles'), ['controller' => 'Salles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salle'), ['controller' => 'Salles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Professeurs'), ['controller' => 'Professeurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Professeur'), ['controller' => 'Professeurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matieres'), ['controller' => 'Matieres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matiere'), ['controller' => 'Matieres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cours form large-9 medium-8 columns content">
    <?= $this->Form->create($cour) ?>
    <fieldset>
        <legend><?= __('Add Cour') ?></legend>
        <?php
            echo $this->Form->input('salle_id', ['options' => $salles]);
            echo $this->Form->input('professeur_id', ['options' => $professeurs]);
            echo $this->Form->input('anneescolaire_id', ['options' => $anneescolaires]);
            echo $this->Form->input('classroom_id', ['options' => $classrooms]);
            echo $this->Form->input('matiere_id', ['options' => $matieres]);
            echo $this->Form->input('jour');
            echo $this->Form->input('heuredebut');
            echo $this->Form->input('heurefin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
