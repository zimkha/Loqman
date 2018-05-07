<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="paiements form large-9 medium-8 columns content">
    <?= $this->Form->create($paiement, ['id' => 'form-payement']) ?>
    <?= $this->Form->hidden('eleve', ['id' => 'eleve']); ?>
 
    <div class="evaluations form large-9 medium-8 columns content">
    
     <h4>Recherche par Classe</h4>
               <?= $this->Form->input('classe', ['options' => $classes, 'label' => 'Classes', 'empty' => '- - - Selectionner une classe SVP - - -']); ?>
    <fieldset>
        <div class="large-12 medium-12">
             <table cellpadding="0" cellspacing="0">
             <thead>
                  <tr>

                <th scope="col"><?= 'Matricule' ?></th>
                <th scope="col"><?= 'Nom' ?></th>
                <th scope="col"><?= 'Prenom' ?></th>
               
                <th scope="col"><?= 'Date naissance Lieu'?></th>
               
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
             </thead>
             <tbody id="liste-eleve">
                    
             </tbody>
        </table>
        </div>
       
        <legend><?= __('Choisir  l\'élève') ?></legend>
        <?php
            //echo $this->Form->input('eleve_id', ['options' => $eleves]);
            //echo $this->Form->input('anneescolaire_id', ['options' => $anneescolaires]);
              echo "<h4 id='somme'> Somme à payer 
                </h4>";        
            echo $this->Form->input('date');
            echo $this->Form->input('code');
            echo $this->Form->input('mois');

        ?>

    </fieldset>
    <?= $this->Form->button(__('Valider Paiment'), ['type' => 'button', 'id' => 'btn-add']) ?>
    <?= $this->Form->end() ?>
</div>
<script>
    var url = 'http://localhost:80/Loqman/api/';
  function changeEleve (id) {
  $('#eleve').val(id);
}
$(document).ready(function(){

       // On regarde le change de valeur
       $('#classe').change(function(event){
       var idc = $('#classe').val();
          var ida = 1;
          var tabelev = $('#liste-eleve');
          if(idc){
              $.ajax({
                  url: url +'classe/annee/'+ idc + '/' + ida, 
                  method: 'POST',
                  data: {},
                  cache: false,
                  beforeSend: function(){
                    tabelev.empty();
                  },
                  success: function(data){
                    if(data){
                       $.each(data.inscriptions, function(key, inscription){
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
          }
       });
     $("#btn-add").click(function(){
     var ide = $("#eleve").val();
     if(ide){
          $.ajax({
             url: +'add',
             method: 'POST',
             data: $('#form-payement').serialize(),
             cahce: false,
             beforSend: function(data){
                   tabelev.empty();
             }, success: function(data){
              if(data){
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
     }

     });
});
</script>
