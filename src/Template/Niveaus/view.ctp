<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Niveau'), ['action' => 'edit', $niveau->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Niveau'), ['action' => 'delete', $niveau->id], ['confirm' => __('Are you sure you want to delete # {0}?', $niveau->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Niveaus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Niveau'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classrooms'), ['controller' => 'Classrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classroom'), ['controller' => 'Classrooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="niveaus view large-9 medium-8 columns content">
    <h3><?= h($niveau->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($niveau->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($niveau->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($niveau->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Classrooms') ?></h4>
        <?php if (!empty($niveau->classrooms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Serie Id') ?></th>
                <th scope="col"><?= __('Niveau Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Libelle') ?></th>
                <th scope="col"><?= __('Inscription') ?></th>
                <th scope="col"><?= __('Mensualite') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($niveau->classrooms as $classrooms): ?>
            <tr>
                <td><?= h($classrooms->id) ?></td>
                <td><?= h($classrooms->serie_id) ?></td>
                <td><?= h($classrooms->niveau_id) ?></td>
                <td><?= h($classrooms->code) ?></td>
                <td><?= h($classrooms->libelle) ?></td>
                <td><?= h($classrooms->inscription) ?></td>
                <td><?= h($classrooms->mensualite) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Classrooms', 'action' => 'view', $classrooms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Classrooms', 'action' => 'edit', $classrooms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classrooms', 'action' => 'delete', $classrooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classrooms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
