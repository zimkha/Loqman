<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="matieres form large-9 medium-8 columns content">
    <?= $this->Form->create($matiere) ?>
    <fieldset>
        <legend><?= __('Add Matiere') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistre')) ?>
    <?= $this->Form->end() ?>
</div>
