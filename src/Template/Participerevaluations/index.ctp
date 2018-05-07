<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="participerevaluations index large-9 medium-8 columns content">
    <h3><?= __('Participerevaluations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('evaluation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classe_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participerevaluations as $participerevaluation): ?>
            <tr>
                <td><?= $participerevaluation->has('evaluation') ? $this->Html->link($participerevaluation->evaluation->id, ['controller' => 'Evaluations', 'action' => 'view', $participerevaluation->evaluation->id]) : '' ?></td>
                <td><?= $this->Number->format($participerevaluation->classe_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $participerevaluation->evaluation_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $participerevaluation->evaluation_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $participerevaluation->evaluation_id], ['confirm' => __('Are you sure you want to delete # {0}?', $participerevaluation->evaluation_id)]) ?>
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
