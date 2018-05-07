<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="salles form large-9 medium-8 columns content">
    <?= $this->Form->create($salle) ?>
    <fieldset>
        <legend><?= __('Add Salle') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('nombreplace');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
