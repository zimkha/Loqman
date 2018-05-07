<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="evaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluation) ?>
    <fieldset>
        <legend><?= __('Nouvelle evaluation') ?></legend>
        <div class="row">
            <div class="large-6 medium-6 columns" style="padding: 0px">
                <?= $this->Form->input('semestre_id', ['options' => $semestres]) ?>
            </div>
            <div class="large-6 medium-6 columns" style="padding: 0px">
                <?= $this->Form->input('matiere_id', ['options' => $matieres]) ?>
            </div>
        </div>
        <div class="row">
            <div class="large-4 medium-4 columns" style="padding: 0px">
                <?= $this->Form->input('date') ?>
            </div>
            <div class="large-4 medium-4 columns" style="padding: 0px">
              <?= $this->Form->input('heuredebut', ['min' => '8', 'max' => '19']) ?>  
          </div>
          <div class="large-4 medium-4 columns" style="padding: 0px">
            <?= $this->Form->input('heurefin', ['min' => '8', 'max' => '19']) ?>
        </div>
    </div>
    <?= $this->Form->input('statut') ?>
    <?= $this->Form->input('typeevaluation_id', ['options' => $typeevaluations]) ?>
    <div><h4>Classes concernees</h4></div>
    <?= $this->Form->input('niveau', ['options' => $niveaux, 'empty' => '- - - selectionnez - - -']) ?>
    <table style="margin-top: 7px">
        <thead>
          <th width="50">#</th>
          <th>Classe</th>
      </thead>
      <tbody id="liste-classe"></tbody>
  </table>
</fieldset>
<?= $this->Form->button(__('Enregistrer')) ?>
<?= $this->Form->end() ?>
</div>

<script>
  var url = 'http://localhost:80/Loqman/api/';
  
  $(document).ready(function() {
    $("#niveau").change(function(event){
      var idn = $(this).val();
      var tabclasse = $('#liste-classe');
      if(idn) {
        $.ajax({
          url: url + 'classes/' + idn, 
          method:'GET',
          cache: false,
          beforeSend: function(data){
            tabclasse.empty();
        }, 
        success: function(data) {
            if(data) {
              $.each(data.classes, function(key, classe) {
                var html = '<tr>' +
                '<td><input type="checkbox" name="classrooms[]" value="' + classe.id + '"></td>' +
                '<td>' + classe.code + '</td>'
                '</tr>';
                tabclasse.append(html);
            });
          }
      }
  });
    } else {
        tabclasse.empty();
        alert('veuillez selectionner un niveau SVP');
    }
});
});
</script>

