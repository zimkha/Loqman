<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="classrooms form large-9 medium-8 columns content">
    <?= $this->Form->create($classroom) ?>
    <fieldset>
        <legend><?= __('Edit Classroom') ?></legend>
        <?php
            echo $this->Form->input('serie_id', ['options' => $series]);
            echo $this->Form->input('niveau_id', ['options' => $niveaus]);
            echo $this->Form->input('code');
            echo $this->Form->input('libelle');
            echo $this->Form->input('inscription');
            echo $this->Form->input('mensualite');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
