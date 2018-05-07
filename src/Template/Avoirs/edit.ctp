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
                ['action' => 'delete', $avoir->classroom_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $avoir->classroom_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avoirs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matieres'), ['controller' => 'Matieres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matiere'), ['controller' => 'Matieres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avoirs form large-9 medium-8 columns content">
    <?= $this->Form->create($avoir) ?>
    <fieldset>
        <legend><?= __('Edit Avoir') ?></legend>
        <?php
            echo $this->Form->input('coeff');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
