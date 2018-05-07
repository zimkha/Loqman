<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="eleves view large-9 medium-8 columns content">
    <h3><?= h(sprintf('%s %s', ucwords($elef->prenom), strtoupper($elef->nom))) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matricule') ?></th>
            <td><?= h($elef->matricule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($elef->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($elef->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lieu de naissance') ?></th>
            <td><?= h($elef->lieunaiss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($elef->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($elef->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= $elef->sexe ? 'Masculin' : 'Feminin' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date de naissance') ?></th>
            <td><?= h($elef->datenaiss) ?></td>
        </tr>
    </table>
</div>
