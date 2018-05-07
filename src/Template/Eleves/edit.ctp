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
                ['action' => 'delete', $elef->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $elef->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Eleves'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="eleves form large-9 medium-8 columns content">
    <?= $this->Form->create($elef) ?>
    <fieldset>
        <legend><?= __('Edit Elef') ?></legend>
        <?php
            echo $this->Form->input('matricule');
            echo $this->Form->input('nom');
            echo $this->Form->input('prenom');
            echo $this->Form->input('datenaiss');
            echo $this->Form->input('lieunaiss');
            echo $this->Form->input('sexe');
            echo $this->Form->input('adresse');
            echo $this->Form->input('telephone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
