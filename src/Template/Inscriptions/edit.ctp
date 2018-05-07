<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inscription->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anneescolaire'), ['controller' => 'Anneescolaires', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eleves'), ['controller' => 'Eleves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elef'), ['controller' => 'Eleves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inscriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($inscription) ?>
    <fieldset>
        <legend><?= __('Edit Inscription') ?></legend>
        <?php
            echo $this->Form->input('anneescolaire_id', ['options' => $anneescolaires]);
            echo $this->Form->input('classroom_id', ['options' => $classrooms]);
            echo $this->Form->input('eleve_id', ['options' => $eleves]);
            echo $this->Form->input('date');
            echo $this->Form->input('montant');
            echo $this->Form->input('mensualite');
            echo $this->Form->input('social');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
