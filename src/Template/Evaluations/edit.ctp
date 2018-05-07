<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="evaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluation) ?>
    <fieldset>
        <legend><?= __('Edit Evaluation') ?></legend>
        <?php
            echo $this->Form->input('semestre_id', ['options' => $semestres]);
            echo $this->Form->input('matiere_id', ['options' => $matieres]);
            echo $this->Form->input('code');
            echo $this->Form->input('date');
            echo $this->Form->input('heuredebut');
            echo $this->Form->input('heurefin');
            echo $this->Form->input('statut');
            echo $this->Form->input('typeevaluation_id', ['options' => $typeevaluations]);
            echo $this->Form->input('classrooms_id', ['options' => $classrooms]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
