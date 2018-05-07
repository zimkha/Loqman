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
                ['action' => 'delete', $salle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Salles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salles form large-9 medium-8 columns content">
    <?= $this->Form->create($salle) ?>
    <fieldset>
        <legend><?= __('Edit Salle') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('nombreplace');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
