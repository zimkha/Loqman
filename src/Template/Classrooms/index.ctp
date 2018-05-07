<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="classrooms index large-9 medium-8 columns content">
    <h3><?= __('Classrooms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('serie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('niveau_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inscription') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mensualite') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($classrooms as $classroom): ?>
            <tr>
                <td><?= $classroom->has('series') ? $this->Html->link($classroom->series->code, ['controller' => 'Series', 'action' => 'view', $classroom->series->id]) : '' ?></td>
                <td><?= $classroom->has('niveau') ? $this->Html->link($classroom->niveau->code, ['controller' => 'Niveaus', 'action' => 'view', $classroom->niveau->id]) : '' ?></td>
                <td><?= h($classroom->code) ?></td>
                <td><?= h($classroom->libelle) ?></td>
                <td><?= $this->Number->format($classroom->inscription) ?></td>
                <td><?= $this->Number->format($classroom->mensualite) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $classroom->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classroom->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classroom->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
