<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="matieres form large-9 medium-8 columns content">
    <?= $this->Form->create($matiere) ?>
    <fieldset>
        <legend><?= __('Edit Matiere') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
