<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style type="text/css">
    .formulaire{
       left: -300px;
    }
</style>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau utilisateur'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-6 medium-4 columns content formulaire">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Connexion') ?></legend>
        <?php
            echo $this->Form->input('username', ['label' => 'Identifiant']);
            echo $this->Form->input('password', ['label' => 'Mot de passe']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Se connnecter', array('class' =>'success'))) ?>
    <?= $this->Form->end() ?>
</div>
