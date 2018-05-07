<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style type="text/css">
    
</style>
    <div class="search">
        <div class="large-9 medium-8 content"> Recherche Par Classe
         
        </div>
    </div>
<div class="eleves index large-9 medium-8 columns content">
    <h3><?= __('Eleves') ?></h3>
    <table cellpadding="0" cellspacing="0">
         <?= $this->Form->create('Eleves')  ;?>
          <?= $this->Form->input('prenom', array('label' => 'Entre le nom de l\'élève',  'id' =>'recherche', 'onkeyup' =>'search()')) ;?>
          
         
           <?= $this->Form->end() ?>
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('matricule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datenaiss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lieunaiss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
           
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
<script>
       var url = 'http://localhost:80/Loqman/api/';
   $(document).ready(function(){
       search = function(requete, reponse){
       var variable = $('#recherche').val();
      $.ajax({
        url: url+'recherche/'+variable,
        dataType: 'JSON',
        data: {variable:variable},
        cache: false,
         berforeSend: function(){

         },
         success: function(data){
            console.log(data);
             // reponse($.map(data.Eleves, function($objet){
             //     // On retourne un tableau HTML
             //     return '';
             // })); 
         }     

      });
      }     
   });


     // 
         //  $('#recherche').autocomplete({
         //     source: function(requete, response){
         //        $.ajax({
         //            url: url + '',
         //            dataType: 'json',
         //            data: {
         //                name_startWith: $('#recherche').val(),
         //                maxRows: 15
         //            },

         //             berforeSend: function(){
                       
         //             },
         //             success: function(data){
         //                response($.map(data.Eleves, function(objet){
         //                  console.log(objet);
         //                }));
         //             }
         //        });
            
         //  }
         //  });
</script>
