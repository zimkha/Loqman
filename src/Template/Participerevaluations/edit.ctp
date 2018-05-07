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
                ['action' => 'delete', $participerevaluation->evaluation_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $participerevaluation->evaluation_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Participerevaluations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="participerevaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($participerevaluation) ?>
    <fieldset>
        <legend><?= __('Edit Participerevaluation') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
