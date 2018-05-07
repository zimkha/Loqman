<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="evaluations view large-9 medium-8 columns content">
    <h3><?= h(sprintf('Evaluation de %s: %s', $evaluation->matiere->code, $evaluation->code)) ?></h3>
    <h6><?= h(sprintf('%s: %s H - %sH', $evaluation->date, $evaluation->heuredebut, $evaluation->heurefin)) ?></h6>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Semestre') ?></th>
            <td><?= $evaluation->has('semestre') ? $this->Html->link($evaluation->semestre->code, ['controller' => 'Semestres', 'action' => 'view', $evaluation->semestre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matiere') ?></th>
            <td><?= $evaluation->has('matiere') ? $this->Html->link($evaluation->matiere->libelle, ['controller' => 'Matieres', 'action' => 'view', $evaluation->matiere->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $evaluation->has('typeevaluation') ? $this->Html->link($evaluation->typeevaluation->libelle, ['controller' => 'Typeevaluations', 'action' => 'view', $evaluation->typeevaluation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statut') ?></th>
            <td><?= $evaluation->statut ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Classes ayant participées') ?></h4>
        <?php if (!empty($evaluation->participerevaluations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Classe') ?></th>
                <th scope="col" class="actions"><span class="right"><?= __('Options') ?></span></th>
            </tr>
            <?php foreach ($evaluation->participerevaluations as $participerevaluations): ?>
            <tr>
                <td><?= h($participerevaluations->classroom->code) ?></td>
                <td class="actions right">
                    <?= $this->Html->link(__('Voir'), ['controller' => 'Participerevaluations', 'action' => 'view', $participerevaluations->evaluation_id], ['class' => 'text-red']) ?>
                    <?= $this->Html->link(__('Modifier'), ['controller' => 'Participerevaluations', 'action' => 'edit', $participerevaluations->evaluation_id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Participerevaluations', 'action' => 'delete', $participerevaluations->evaluation_id], ['confirm' => __('Voulez-vous vraiment supprimer cette classe de cette evaluation # {0}?', $participerevaluations->evaluation_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
