<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="inscriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($inscription) ?>
    <fieldset>
        <legend><?= __('Nouvelle inscription ' . $connected_user->annee->code) ?></legend>
        <div class="row">
            <div class="large-6 medium-6 columns"><?= $this->Form->input('classroom_id', ['options' => $classrooms, 'label' => 'Classe']); ?></div>
            <div class="large-6 medium-6 columns"><?= $this->Form->input('date', ['label' => 'Date inscription']); ?></div>    
        </div>
        <div class="row">
            <div class="large-6 medium-6 columns"><?= $this->Form->input('montant', ['label' => 'Montant inscription', 'min' => 0]); ?></div>    
            <div class="large-6 medium-6 columns"><?= $this->Form->input('mensualite', ['min' => 0]); ?></div>    
        </div>
        <div class="row">
            <div class="large-6 medium-6 columns"><?= $this->Form->input('social', ['label' => 'Cas social']); ?></div>
        </div>
        <div class="row">
            <div class="large-6 medium-6 columns"><?= $this->Form->input('elef.prenom', ['label' => 'Prenom de l\'eleve']); ?></div>
            <div class="large-6 medium-6 columns"><?= $this->Form->input('elef.nom', ['label' => 'Nom de l\'eleve']); ?></div>
        </div>
        <div class="row">
            <div class="large-6 medium-6 columns"><?= $this->Form->input('elef.datenaiss', ['label' => 'Date de naissance de l\'eleve', 'type' => 'date']); ?></div>
            <div class="large-6 medium-6 columns"><?= $this->Form->input('elef.lieunaiss', ['label' => 'Lieu de naissance de l\'eleve']); ?></div>
        </div>
        <div class="row">
            <div class="large-6 medium-6 columns"><?= $this->Form->input('elef.sexe', ['label' => 'Genre', 'options' => ['Masculin', 'Feminin']]); ?></div>
            <div class="large-6 medium-6 columns"><?= $this->Form->input('elef.telephone', ['label' => 'Numero de telephone de l\'eleve', 'type' => 'number', 'min' => 700000000, 'max' => 789999999]); ?></div>
        </div>
        <div class="row">
            <div class="large-12 medium-12 columns"><?= $this->Form->input('elef.adresse', ['label' => 'Adresse de l\'eleve', 'rows' => 6]); ?></div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
