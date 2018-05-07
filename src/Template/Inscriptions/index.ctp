<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="inscriptions index large-9 medium-8 columns content">
    <div class="large-4 medium-4">
        <?= $this->Form->input('classe', ['options' => $classes, 'label' => 'Classe', 'empty' => '- - - Selectionner une classe SVP - - -']); ?>
    </div>
    <h3><?= isset($classroom) ? $classroom->code. " : " . __('Inscriptions') : 'Toutes les inscriptions' ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>

                <th scope="col"><?= 'Matricule' ?></th>
                <th scope="col"><?= 'Nom' ?></th>
                <th scope="col"><?= 'Prenom' ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mensualite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('social') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscriptions as $inscription): ?>
                <tr>
                    <td><?= $inscription->has('elef') ? $this->Html->link(strtoupper($inscription->elef->matricule), ['controller' => 'Eleves', 'action' => 'view', $inscription->elef->id]) : '' ?></td>
                    <td><?= $inscription->has('elef') ? strtoupper($inscription->elef->nom) : '' ?></td>
                    <td><?= $inscription->has('elef') ? $inscription->elef->prenom : '' ?></td>
                    <td><?= h($inscription->date) ?></td>
                    <td><?= $this->Number->format($inscription->montant) ?></td>
                    <td><?= $this->Number->format($inscription->mensualite) ?></td>
                    <td><?= h($inscription->social) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inscription->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inscription->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inscription->id)]) ?>
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

<script type="text/javascript">
    $(document).ready(function() {
      $("#classe").change(function(event){
        var idc = $('#classe').val();
        window.location.href = "<?= $this->Url->build(['action' => 'index', '']) ?>" + '/' + idc;
    });
  });
</script>