<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="professeurs form large-9 medium-8 columns content">
    <?= $this->Form->create($professeur) ?>
    <fieldset>
        <legend><?= __('Add Professeur') ?></legend>
        <?php
            echo $this->Form->input('matricule');
            echo $this->Form->input('nom');
            echo $this->Form->input('prenom');
            echo $this->Form->input('adresse');
            echo $this->Form->input('telephone');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
