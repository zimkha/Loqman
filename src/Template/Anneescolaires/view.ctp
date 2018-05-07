<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="anneescolaires view large-9 medium-8 columns content">
    <h3><?= h($anneescolaire->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($anneescolaire->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($anneescolaire->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedebut') ?></th>
            <td><?= h($anneescolaire->datedebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statut') ?></th>
            <td><?= $anneescolaire->statut ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cours') ?></h4>
        <?php if (!empty($anneescolaire->cours)): ?>
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
            <?php foreach ($anneescolaire->cours as $cours): ?>
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
        <?php if (!empty($anneescolaire->enseigners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Anneescolaire Id') ?></th>
                <th scope="col"><?= __('Professeur Id') ?></th>
                <th scope="col"><?= __('Matiere Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($anneescolaire->enseigners as $enseigners): ?>
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
    <div class="related">
        <h4><?= __('Related Inscriptions') ?></h4>
        <?php if (!empty($anneescolaire->inscriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Anneescolaire Id') ?></th>
                <th scope="col"><?= __('Classroom Id') ?></th>
                <th scope="col"><?= __('Eleve Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Montant') ?></th>
                <th scope="col"><?= __('Mensualite') ?></th>
                <th scope="col"><?= __('Social') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($anneescolaire->inscriptions as $inscriptions): ?>
            <tr>
                <td><?= h($inscriptions->id) ?></td>
                <td><?= h($inscriptions->anneescolaire_id) ?></td>
                <td><?= h($inscriptions->classroom_id) ?></td>
                <td><?= h($inscriptions->eleve_id) ?></td>
                <td><?= h($inscriptions->date) ?></td>
                <td><?= h($inscriptions->montant) ?></td>
                <td><?= h($inscriptions->mensualite) ?></td>
                <td><?= h($inscriptions->social) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Inscriptions', 'action' => 'view', $inscriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Inscriptions', 'action' => 'edit', $inscriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inscriptions', 'action' => 'delete', $inscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inscriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paiements') ?></h4>
        <?php if (!empty($anneescolaire->paiements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Eleve Id') ?></th>
                <th scope="col"><?= __('Anneescolaire Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Mois') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($anneescolaire->paiements as $paiements): ?>
            <tr>
                <td><?= h($paiements->id) ?></td>
                <td><?= h($paiements->eleve_id) ?></td>
                <td><?= h($paiements->anneescolaire_id) ?></td>
                <td><?= h($paiements->date) ?></td>
                <td><?= h($paiements->code) ?></td>
                <td><?= h($paiements->mois) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Semestres') ?></h4>
        <?php if (!empty($anneescolaire->semestres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Anneescolaire Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Datedebut') ?></th>
                <th scope="col"><?= __('Phase') ?></th>
                <th scope="col"><?= __('Statut') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($anneescolaire->semestres as $semestres): ?>
            <tr>
                <td><?= h($semestres->id) ?></td>
                <td><?= h($semestres->anneescolaire_id) ?></td>
                <td><?= h($semestres->code) ?></td>
                <td><?= h($semestres->datedebut) ?></td>
                <td><?= h($semestres->phase) ?></td>
                <td><?= h($semestres->statut) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Semestres', 'action' => 'view', $semestres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Semestres', 'action' => 'edit', $semestres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Semestres', 'action' => 'delete', $semestres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $semestres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
