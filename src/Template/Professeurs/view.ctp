<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="professeurs view large-9 medium-8 columns content">
    <h3><?= h($professeur->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matricule') ?></th>
            <td><?= h($professeur->matricule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($professeur->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($professeur->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($professeur->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($professeur->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($professeur->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($professeur->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cours') ?></h4>
        <?php if (!empty($professeur->cours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Salle Id') ?></th>
                <th scope="col"><?= __('Professeur Id') ?></th>
                <th scope="col"><?= __('Anneescolaire Id') ?></th>
                <th scope="col"><?= __('Classroom Id') ?></th>
                <th scope="col"><?= __('Matiere Id') ?></th>
                <th scope="col"><?= __('Jour') ?></th>
                <th scope="col"><?= __('Heuredebut') ?></th>
                <th scope="col"><?= __('Heurefin') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($professeur->cours as $cours): ?>
            <tr>
                <td><?= h($cours->id) ?></td>
                <td><?= h($cours->salle_id) ?></td>
                <td><?= h($cours->professeur_id) ?></td>
                <td><?= h($cours->anneescolaire_id) ?></td>
                <td><?= h($cours->classroom_id) ?></td>
                <td><?= h($cours->matiere_id) ?></td>
                <td><?= h($cours->jour) ?></td>
                <td><?= h($cours->heuredebut) ?></td>
                <td><?= h($cours->heurefin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cours', 'action' => 'view', $cours->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cours', 'action' => 'edit', $cours->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cours', 'action' => 'delete', $cours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cours->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Enseigners') ?></h4>
        <?php if (!empty($professeur->enseigners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Anneescolaire Id') ?></th>
                <th scope="col"><?= __('Professeur Id') ?></th>
                <th scope="col"><?= __('Matiere Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($professeur->enseigners as $enseigners): ?>
            <tr>
                <td><?= h($enseigners->id) ?></td>
                <td><?= h($enseigners->anneescolaire_id) ?></td>
                <td><?= h($enseigners->professeur_id) ?></td>
                <td><?= h($enseigners->matiere_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Enseigners', 'action' => 'view', $enseigners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Enseigners', 'action' => 'edit', $enseigners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enseigners', 'action' => 'delete', $enseigners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enseigners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
