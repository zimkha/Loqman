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
                ['action' => 'delete', $noter->eleve_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $noter->eleve_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Noters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Eleves'), ['controller' => 'Eleves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Elef'), ['controller' => 'Eleves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="noters form large-9 medium-8 columns content">
    <?= $this->Form->create($noter) ?>
    <fieldset>
        <legend><?= __('Edit Noter') ?></legend>
        <?php
            echo $this->Form->input('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
