<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="inscriptions form large-9 medium-8 columns content">
  <?= $this->Form->create($inscription, ['id' => 'frm-reinscription']) ?>
  <?= $this->Form->hidden('annee', ['value' => $anneescolaire->id, 'id' => 'annee']); ?>
  <?= $this->Form->hidden('eleve', ['id' => 'eleve']); ?>
  <fieldset>
    <legend><?= __('Renscription ' . $connected_user->annee->code) ?></legend>
    <div class="row">
      <div class="large-6 medium-6 columns"><?= $this->Form->input('classroom_id', ['options' => $classrooms, 'label' => 'Classe']); ?></div>
      <div class="large-6 medium-6 columns"><?= $this->Form->input('date', ['label' => 'Date inscription']); ?></div>    
    </div>
    <div class="row">
      <div class="large-6 medium-6 columns"><?= $this->Form->input('montant', ['label' => 'Montant inscription', 'min' => 0]); ?></div>    
      <div class="large-6 medium-6 columns"><?= $this->Form->input('mensualite', ['min' => 0]); ?></div>    
    </div>
    <div class="row">
      <div class="large-6 medium-6 columns"><?= $this->Form->input('social', ['label' => 'Cas social']); ?></div>
    </div>
    <div class="row">
     <div class="large-12 medium-12 columns">
      <h4>Recherche</h4>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <?= $this->Form->input('classe', ['class' =>'choix_classe', 'options' => $_classe, 'empty' => ' - - - selectionner une classe - - -']); ?>
        </div>
        <div class="large-6 medium-6 columns">
          <?= $this->Form->input('matricule'); ?>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <table style="margin-top: 7px">
            <thead>
              <th width="50">#</th>
              <th>Matricule</th>
              <th>Prenom</th>
              <th>Nom</th>
              <th>D. & lieu de naissance</th>
            </thead>
            <tbody id="liste-eleve"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="hide">
   <div class="row">
    <h5>Les Informations de l'eleve</h5>
    <div class="large-9 medium-8 columns">            
    </div>
  </div>
</div>
<div id="error" class="message error hidden"></div>
<div id="success" class="message success hidden"></div>
</fieldset>
<?= $this->Form->button(__('Reinscrire'), ['type' => 'button', 'id' => 'btn-add']) ?>
<?= $this->Form->end() ?>
</div>
<script>
  var url = 'http://localhost/Loqman/api/';
  function changeEleve (id) {
    $('#eleve').val(id);
  }
  $(document).ready(function() {
    $("#classe").change(function(event){
      var idc = $('#classe').val(), ida = $('#annee').val();
      var tabelev = $('#liste-eleve');
      if(idc) {
        $.ajax({
          url: url + 'classe/annee/' + idc + '/' + ida, 
          method:'POST',
          data: {},
          cache: false,
          beforeSend: function(data){
            tabelev.empty();
          }, 
          success: function(data) {
            if(data) {
              $.each(data.inscriptions, function(key, inscription) {
                var eleve = inscription.elef;
                var html = '<tr>' +
                '<td><input type="radio" onchange="changeEleve(this.value)" name="eleve" value="' + eleve.id + '"></td>' +
                '<td>' + eleve.matricule + '</td>' +
                '<td>' + eleve.prenom + '</td>' +
                '<td>' + eleve.nom + '</td>' +
                '<td>' + new Date(eleve.datenaiss).toLocaleDateString() + ' à ' + eleve.lieunaiss + '</td>' +
                '</tr>';
                tabelev.append(html);
              });
            }
          }
        });
      } else {
        tabelev.empty();
        alert('veuillez selectionner une classe SVP');
      }
    });
    $('#btn-add').click(function () {
      var ide = $('#eleve').val();
      if (ide) {
        $.ajax({
          url: url + 'reinscrire', 
          method:'POST',
          data: $('#frm-reinscription').serialize(),
          cache: false,
          beforeSend: function(data){
            
          }, 
          success: function(data) {
            if(data.inscription) {
              $('#success').removeClass('hidden');
              $('#success').html('Reinscription reussie');
              window.location.reload();
            }
          },
          error: function () {
            $('#error').removeClass('hidden');
            $('#error').html('Impossible de reinscrire cet eleve. veuillez reessayer encore');
          }
        });
      } else {
        alert('veuillez remplir tous le champs');
      }
    });
  });
</script>

<? echo $this->Js->writeBuffer(); ?> 
