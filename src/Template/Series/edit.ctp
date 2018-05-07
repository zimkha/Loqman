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
                ['action' => 'delete', $series->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $series->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Series'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="series form large-9 medium-8 columns content">
    <?= $this->Form->create($series) ?>
    <fieldset>
        <legend><?= __('Edit Series') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
