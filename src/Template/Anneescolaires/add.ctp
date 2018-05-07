<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Anneescolaires'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Enseigners'), ['controller' => 'Enseigners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Enseigner'), ['controller' => 'Enseigners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Semestres'), ['controller' => 'Semestres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Semestre'), ['controller' => 'Semestres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="anneescolaires form large-9 medium-8 columns content">
    <?= $this->Form->create($anneescolaire) ?>
    <fieldset>
        <legend><?= __('Add Anneescolaire') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('datedebut');
            echo $this->Form->input('statut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
