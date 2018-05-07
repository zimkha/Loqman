<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cours Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Salles
 * @property \Cake\ORM\Association\BelongsTo $Professeurs
 * @property \Cake\ORM\Association\BelongsTo $Anneescolaires
 * @property \Cake\ORM\Association\BelongsTo $Classrooms
 * @property \Cake\ORM\Association\BelongsTo $Matieres
 *
 * @method \App\Model\Entity\Cour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cour findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('cours');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Salles', [
            'foreignKey' => 'salle_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Professeurs', [
            'foreignKey' => 'professeur_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Anneescolaires', [
            'foreignKey' => 'anneescolaire_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Classrooms', [
            'foreignKey' => 'classroom_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Matieres', [
            'foreignKey' => 'matiere_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('jour', 'create')
            ->notEmpty('jour');

        $validator
            ->requirePresence('heuredebut', 'create')
            ->notEmpty('heuredebut');

        $validator
            ->requirePresence('heurefin', 'create')
            ->notEmpty('heurefin');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['salle_id'], 'Salles'));
        $rules->add($rules->existsIn(['professeur_id'], 'Professeurs'));
        $rules->add($rules->existsIn(['anneescolaire_id'], 'Anneescolaires'));
        $rules->add($rules->existsIn(['classroom_id'], 'Classrooms'));
        $rules->add($rules->existsIn(['matiere_id'], 'Matieres'));

        return $rules;
    }
}
