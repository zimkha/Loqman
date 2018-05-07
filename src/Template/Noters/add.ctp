<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="noters form large-9 medium-8 columns content">
    <?= $this->Form->create($noter) ?>
    <fieldset>
        <legend><?= __('Noter l\'éléve') ?></legend>
        <?php
            echo $this->Form->input('note');
            echo $this->Form->input('eleve_id', ['option' =>$eleves]);
            echo $this->Form->input('evaluation_id', ['option' => $evaluations, 'label' =>'Evaluation']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
