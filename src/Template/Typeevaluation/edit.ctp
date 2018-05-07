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
                ['action' => 'delete', $typeevaluation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeevaluation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Typeevaluation'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typeevaluation form large-9 medium-8 columns content">
    <?= $this->Form->create($typeevaluation) ?>
    <fieldset>
        <legend><?= __('Edit Typeevaluation') ?></legend>
        <?php
            echo $this->Form->input('libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
