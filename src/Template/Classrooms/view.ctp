<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="classrooms view large-9 medium-8 columns content">
    <h3><?= h($classroom->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Series') ?></th>
            <td><?= $classroom->has('series') ? $this->Html->link($classroom->series->code, ['controller' => 'Series', 'action' => 'view', $classroom->series->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Niveau') ?></th>
            <td><?= $classroom->has('niveau') ? $this->Html->link($classroom->niveau->code, ['controller' => 'Niveaus', 'action' => 'view', $classroom->niveau->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($classroom->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($classroom->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($classroom->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inscription') ?></th>
            <td><?= $this->Number->format($classroom->inscription) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mensualite') ?></th>
            <td><?= $this->Number->format($classroom->mensualite) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avoirs') ?></h4>
        <?php if (!empty($classroom->avoirs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Classroom Id') ?></th>
                <th scope="col"><?= __('Matiere Id') ?></th>
                <th scope="col"><?= __('Coeff') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($classroom->avoirs as $avoirs): ?>
            <tr>
                <td><?= h($avoirs->classroom_id) ?></td>
                <td><?= h($avoirs->matiere_id) ?></td>
                <td><?= h($avoirs->coeff) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Avoirs', 'action' => 'view', $avoirs->classroom_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Avoirs', 'action' => 'edit', $avoirs->classroom_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Avoirs', 'action' => 'delete', $avoirs->classroom_id], ['confirm' => __('Are you sure you want to delete # {0}?', $avoirs->classroom_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
   
        </table>
       
    </div>
</div>
